<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#000000"/>
    <link rel="shortcut icon" href="./assets/img/favicon.ico"/>
    <link
        rel="apple-touch-icon"
        sizes="76x76"
        href="./assets/img/apple-icon.png"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/creativetimofficial/tailwind-starter-kit/compiled-tailwind.min.css"
    />

    <title>{{ config('app.name', 'File Manager') }}</title>
</head>
<body class="text-gray-800 antialiased">
<nav
    class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 "
>
    <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
    >
        <div
            class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
            <a
                class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
                href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation"
            >Corporación</a
            >
            <button
                class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                type="button"
                onclick="toggleNavbar('example-collapse-navbar')"
            >
                <i class="text-white fas fa-bars"></i>
            </button>
        </div>
        <div
            class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
            id="example-collapse-navbar"
        >
            <!--<ul class="flex flex-col lg:flex-row list-none mr-auto">
                <li class="flex items-center">
                    <a
                        class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/landing"
                    ><i
                            class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"
                        ></i>
                        Entrar</a
                    >
                </li>
            </ul>-->
            <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                @if (Route::has('login'))
                    @auth
                        <li class="flex items-center">
                            <a
                                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                                href="{{ url('/dashboard') }}"
                            ><i
                                    class="lg:text-gray-300 text-gray-500 fas fa-tv text-lg leading-lg "
                                ></i
                                ><span class="inline-block ml-2">Dashboard</span></a
                            >
                        </li>
                    @else
                        <li class="flex items-center">
                            <a
                                class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                                href="{{ route('login') }}"
                            ><i
                                    class="lg:text-gray-300 text-gray-500 fas fa-rocket text-lg leading-lg "
                                ></i
                                ><span class="inline-block ml-2">Entrar</span></a
                            >
                        </li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
<main>
    <div
        class="relative pt-16 pb-32 flex content-center items-center justify-center"
        style="min-height: 75vh;"
    >
        <div
            class="absolute top-0 w-full h-full bg-center bg-cover"
            style='background-image: url("https://images.unsplash.com/photo-1541754133541-1183bff921c8?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80");'
        >
          <span
              id="blackOverlay"
              class="w-full h-full absolute opacity-75 bg-black"
          ></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div class="pr-12">
                        <h1 class="text-white font-semibold text-5xl">
                            Corporación
                        </h1>
                        <p class="mt-4 text-lg text-gray-300">
                            Página por defecto para el prototipo de Sistema de Almacenamiento para la Corporación
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
            style="height: 70px;"
        >
            <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
            >
                <polygon
                    class="text-gray-300 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
    </div>
    <section class="pb-20 bg-gray-300 -mt-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400"
                            >
                                <i class="fas fa-award"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Integridad de Datos</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Divide details about your product or agency work into parts.
                                A paragraph describing a feature will be enough.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-4/12 px-4 text-center">
                    <div
                        class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg"
                    >
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-blue-400"
                            >
                                <i class="fas fa-retweet"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Alta disponibilidad</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Keep you user engaged by providing meaningful information.
                                Remember that by this time, the user is curious.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pt-6 w-full md:w-4/12 px-4 text-center">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            <div
                                class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-green-400">
                                <i class="fas fa-fingerprint"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Seguridad de datos</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Write a few lines about each one. A paragraph describing a feature will be enough. Keep
                                you user engaged!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-20 relative block bg-gray-900">
        <div
            class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;"
        >
            <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
            >
                <polygon
                    class="text-gray-900 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
            <div class="flex flex-wrap justify-center text-center mb-24">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold text-white">Equipo de Trabajo</h2>
                    <p class="text-lg leading-relaxed m-4 text-gray-300">
                        Este es el team mamalón
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img
                            alt="..."
                            src="./assets/img/team-1-800x800.jpg"
                            class="shadow-lg rounded-full max-w-full mx-auto"
                            style="max-width: 120px;"
                        />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold text-white">Cristian Osegueda</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Javascript Developer - "El Pimp"
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img
                            alt="..."
                            src="./assets/img/team-2-800x800.jpg"
                            class="shadow-lg rounded-full max-w-full mx-auto"
                            style="max-width: 120px;"
                        />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Ariel Zelaya</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                No hizo nada - "El del café que no nos dió café :'c"
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img
                            alt="..."
                            src="./assets/img/team-3-800x800.jpg"
                            class="shadow-lg rounded-full max-w-full mx-auto"
                            style="max-width: 120px;"
                        />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Ricardo Sosa</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                Saber que hizo - "El que batea para el otro lado"
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-6/12 lg:w-3/12 lg:mb-0 mb-12 px-4">
                    <div class="px-6">
                        <img
                            alt="..."
                            src="./assets/img/team-4-470x470.png"
                            class="shadow-lg rounded-full max-w-full mx-auto"
                            style="max-width: 120px;"
                        />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Carlos Cativo</h5>
                            <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
                                No pudo con kubernetes en openstack :c - "El morido"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="relative bg-gray-300 pt-8 pb-6">
    <div
        class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
        style="height: 80px;"
    >
        <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
        >
            <polygon
                class="text-gray-300 fill-current"
                points="2560 0 2560 100 0 100"
            ></polygon>
        </svg>
    </div>
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">
                <h4 class="text-3xl font-semibold">Let's do it!</h4>
                <h5 class="text-lg mt-0 mb-2 text-gray-700">
                    Ya casi terminamos.
                </h5>
            </div>
        </div>
        <hr class="my-6 border-gray-400"/>
        <div
            class="flex flex-wrap items-center md:justify-between justify-center"
        >
            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                <div class="text-sm text-gray-600 font-semibold py-1">
                    Copyright © 2021
                    <a
                        href="https://www.creative-tim.com"
                        class="text-gray-600 hover:text-gray-900"
                    >Team Urano</a
                    >.
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
</script>
</html>
