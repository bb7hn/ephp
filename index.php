<?php
require_once 'config.php';

$request_payload = file_get_contents('php://input');

$request_data = json_decode($request_payload);

$GLOBALS['AUTH_TOKEN'] = isset($request_data->authToken)?$request_data->authToken:'';

$service = isset($request_data->service)?$request_data->service:null;

if(!$service) {
    $request_url = $_SERVER['REQUEST_URI'];
    $service = ltrim(parse_url($request_url, PHP_URL_PATH), '/');
    if(!$service) {
        $app->set_response([], 400, 'Unknown service');
        exit;
    }
}

$service_path = check_service($service);

if(!$service_path) {
    $app->set_response([], 400, 'Invalid service');
    exit;
}

require_once $service_path;
