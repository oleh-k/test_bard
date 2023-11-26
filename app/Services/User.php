<?php

namespace App\Services;

use App\Models\User as userModel;
use Illuminate\Support\Facades\Validator;

class User
{

    public static function register($request): array
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email:rfc|unique:users',
            'password' => 'required|confirmed|min:6|max:64',
        ]);

        if ($validator->fails()) {
            $response = [
                "success" => false,
                "message" => $validator->errors()
            ];
            return $response;
        } else {

            $userModel = userModel::create($request->all());

            if ($userModel) {

                $response = [
                    "success" => true,
                    "message" => $userModel
                ];
                return $response;
            } else {
                $response = [
                    "success" => false,
                    "message" => $userModel
                ];
                return $response;
            }
        }
    }
}
