<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;

class Bard
{

    public static function search($request): array
    {


        $response = [
            "success" => true,
            "message" => $request['question']
        ];
        return $response;
    }
}
