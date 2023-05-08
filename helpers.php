<?php

//require configuration
require_once 'config.php';

function require_helpers(array $paths=['helpers'])
{
    foreach($paths as $dir) {
        foreach (glob("$dir/*") as $filename) {
            if(is_dir($filename)) {
                require_helpers([$filename]);
            } else {
                // check if file is a PHP file
                if (pathinfo($filename, PATHINFO_EXTENSION) == 'php') {
                    //echo $filename.'<hr/>';
                    require_once $filename;
                }
            }
        }
    }
}

$helper_paths = [
    __DIR__.'/.core',
    __DIR__.'/helpers',
    __DIR__.'/helpers/.core',
];
/* var_dump($helper_paths);
echo'<br><br><hr/>'; */
//require helpers
require_helpers($helper_paths);
