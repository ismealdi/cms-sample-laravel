<?php

namespace App\Utils;

class ResponseUtil
{
    public static function makeResponse(mixed $data, string $message): array
    {
        return [
            'valid' => true,
            'data'    => $data,
            'message' => $message,
            'errors' => []
        ];
    }

    public static function makeError(mixed $error = [], string $message): array
    {
        $res = [
            'valid' => false,
            'data'    => [],
            'message' => $message,
            'errors' => $error
        ];

        if (!empty($data)) {
            $res['data'] = $data;
        }

        return $res;
    }
}