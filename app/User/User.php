<?php

namespace App\User;

use App\Models\User as userModel;

class User
{

    public static function register($request): userModel
    {

        $userModel = userModel::create($request->all());

        return $userModel;
    }
}
