<?php
use Firebase\JWT\Key;
use Firebase\JWT\JWT;

function validate_token(string $token = ""): bool|stdClass
{
    global $JWT_KEY;
    global $JWT_EXPIRE_DAYS;
    try {
        $decoded = JWT::decode($token, new Key($JWT_KEY, 'HS256'));
        if (!isset($decoded->created_at)) {
            return false;
        }

        $now            = time() - $decoded->created_at;
        $dateDiffInDays = round($now / (60 * 60 * 24));

        if ($dateDiffInDays >= $JWT_EXPIRE_DAYS ?? 10) {
            return false;
        }

        return $decoded;
    } catch (throwable $exception) {
        return false;
    }


    /*JWT::$leeway = 60; // $leeway in seconds
    $decoded = JWT::decode($jwt, new Key($key, 'HS256'));*/
}
