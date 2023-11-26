<?php

namespace App\Http\Controllers;

use App\User\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function register(Request $request)
    {

        $user = User::register($request);

        return $user;
    }
}
