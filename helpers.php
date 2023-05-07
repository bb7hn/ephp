<?php
//require configuration
require_once 'config.php';
function require_helpers($dir='helpers'){
    foreach (glob("$dir/*") as $filename) {
        if(is_dir($filename)){
            require_helpers($filename);
        }
        else{
            // check if file is a PHP file
            if (pathinfo($filename, PATHINFO_EXTENSION) == 'php') {
                require_once $filename;
            }
        }
    }
}
//require helpers
require_helpers();
?>