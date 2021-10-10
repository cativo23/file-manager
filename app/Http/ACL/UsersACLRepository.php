<?php

namespace App\Http\ACL;

class UsersACLRepository implements \Alexusmai\LaravelFileManager\Services\ACLService\ACLRepository
{

    /**
     * @inheritDoc
     */
    public function getUserID()
    {
        return \Auth::id();
    }

    /**
     * @inheritDoc
     */
    public function getRules(): array
    {
        if (\Auth::id() === 1) {
            return [
                ['disk' => 'ceph', 'path' => '*', 'access' => 2],
            ];
        }

        return [
            ['disk' => 'ceph', 'path' => '/', 'access' => 1],                                  // main folder - read
            ['disk' => 'ceph', 'path' => 'users', 'access' => 1],                              // only read
            ['disk' => 'ceph', 'path' => 'users/'. \Auth::user()->name, 'access' => 1],        // only read
            ['disk' => 'ceph', 'path' => 'users/'. \Auth::user()->name .'/*', 'access' => 2],  // read and write
        ];
    }
}
