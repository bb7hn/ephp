<?php
function set_response(array $data = null,int $code=200, string $message="success",)
{
    header('Content-Type: application/json');
    $response = [
        "code"    => $code,
        "message" => $message,
        "data"    => $data
    ];
    echo json_encode($response, JSON_NUMERIC_CHECK);
}