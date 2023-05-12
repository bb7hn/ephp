<?php

use ephp\Core;

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
    __DIR__.'/helpers',
];
//require helpers
require_helpers($helper_paths);
