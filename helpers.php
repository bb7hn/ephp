<?php
//require configuration
require_once 'config.php';

function require_helpers($dir='helpers'){
    foreach (glob("$dir/*") as $filename) {
        // TODO REMEMBER TO DELETE THIS LATER
        //echo $filename . '<hr>';
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

//require core helpers
require_helpers('helpers/.core');
//require helpers
require_helpers();
?>