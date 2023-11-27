<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;
use Pj8912\PhpBardApi\Bard as PhpBardApiBard;

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

            $bard = new PhpBardApiBard();
            $result = $bard->get_answer($request['question']);

            $response = [
                "success" => true,
                "message" => $result
            ];
            return $response;
        }
    }
}
