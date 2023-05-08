<?php

require_once 'config.php';
$test_token = create_token();
$response = [
    $test_token,
    getenv('test'),
    get_db_connection(),
];
set_response($response);
