<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;

class Bard
{

    public static function search($request): array
    {

        $validator = Validator::make($request, [
            'question' => 'required|min:2|max:250'
        ]);

        if ($validator->fails()) {
            $response = [
                "success" => false,
                "message" => $validator->errors()
            ];
            return $response;
        } else {

            $response = [
                "success" => true,
                "message" => $request['question']
            ];
            return $response;
        }
    }
}
