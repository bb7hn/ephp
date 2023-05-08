<?php

function get_db_connection():false|PDO
{
    $db = $GLOBALS['DB'];
    if($db!==null) {
        return $db;
    }
    return false;
}
