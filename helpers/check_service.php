<?php
function check_service($service):string|false
{
    $main_dir = $_SERVER['DOCUMENT_ROOT'];
    $public_path = $main_dir . '/services/public/';
    $private_path = $main_dir . '/services/private/';

    $public_service = $public_path . $service . '.php';
    $private_service = $private_path . $service . '.php';
    
    if(file_exists($public_service)) {
        return $public_service;
    } elseif(file_exists($private_service)) {
        return $private_service;
    } else {
        return false;
    }
}
