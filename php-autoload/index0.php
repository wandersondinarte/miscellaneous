<?php

spl_autoload_register(function($class){
    require_once($class.'.class.php');
});

echo '<div><h1>PHP autoload class example.</h1></div>';

$first = new First();
$first->run_first();

?>