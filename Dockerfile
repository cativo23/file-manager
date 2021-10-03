FROM composer:latest as build
WORKDIR /app
COPY . /app
RUN composer install

FROM php:8.0-apache
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    zlib1g-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    supervisor \
    vim \
    unzip \
    gnupg2

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install pcntl \
    && docker-php-ext-install zip \
    && docker-php-ext-install intl \
    && docker-php-source delete

RUN pecl install -o -f redis \
    &&  rm -rf /tmp/pear \
    &&  docker-php-ext-enable redis

#Change Max Upload Size
RUN cd /usr/local/etc/php/conf.d/ && \
    echo 'upload_max_filesize = 10G' >> /usr/local/etc/php/conf.d/docker-php-uploadmaxsize.ini

EXPOSE 80
COPY --from=build /app /app
COPY docker/vhost.conf /etc/apache2/sites-available/000-default.conf
RUN chown -R www-data:www-data /app
RUN a2enmod rewrite