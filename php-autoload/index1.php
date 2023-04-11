<?php

function autoload($class) {

    $file_path = 'classes/'. $class . '.class.php';

    if (file_exists($file_path)) {
        require_once($file_path);
    }

}

spl_autoload_register('autoload');


echo '<div><h1>PHP autoload class example.</h1></div>';

$second = new Second();
$second->run_second();

?>