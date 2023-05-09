<?php
$test_token = $app->create_token();
$invalid_token = $test_token."invalid";

$decoded_token = $app->validate_token($test_token);
$invalid_decoded_token = $app->validate_token($invalid_token);

$response = [
    "token" =>$test_token,
    "decoded_token" => $decoded_token,
    "invalid_decoded_token"=>$invalid_decoded_token,
];

$app->set_response($response);
