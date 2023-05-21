<?php

namespace App\Repositories\User;

use App\Models\User;


class UserRepository implements UserRepositoryInterface
{
    /**
     * Retrive All Users As List
     * 
     * @return Collection $user
     */

    public function getUser()
    {
        $users = User::all();
        return $users;
    }

}
