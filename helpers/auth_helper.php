<?php

function use_auth(array $data=[], int $status=403, string $message="Unauthorized")
{
    $token = $GLOBALS['AUTH_TOKEN'];
    $app = $GLOBALS["APP"];
    $token = $app->validate_token($token);
    if(!$token) {
        $app->set_response($data, $status, $message);
    }
};
