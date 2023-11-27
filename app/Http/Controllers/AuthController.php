<?php

namespace App\Http\Controllers;

use App\Services\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function register(Request $request)
    {

        $user = User::register($request);

        if (!$user['success']) {
            return response($user, 400);
        }

        return $user;
    }

    public function login(Request $request)
    {
        $user = User::login($request);

        if (!$user['success']) {
            return response($user, 400);
        }

        return $user;
    }

    public function logout()
    {
        $user = User::logout();

        if (!$user['success']) {
            return response($user, 400);
        }

        return $user;
    }
}
