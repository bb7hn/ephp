<?php

function use_auth()
{
    $token = $GLOBALS['AUTH_TOKEN'];
    $app = $GLOBALS["APP"];
    $token = $app->validate_token($token);
    if(!$token) {
        $app->set_response([], 403, "Unauthorized");
    }
};
