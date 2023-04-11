<?php

    include('Autoloader.class.php');

    //spl_autoload_register(array(new Autoloader(''), 'autoload'));
    //spl_autoload_register(array(new Autoloader('classes/'), 'autoload'));
    //spl_autoload_register(array(new Autoloader('classes/anotherclasses/'), 'autoload'));

    spl_autoload_register(array(new Autoloader(''), 'autoload'));
    spl_autoload_register(array(new Autoloader('classes/'), 'autoload'));
    spl_autoload_register(array(new Autoloader('classes/anotherclasses/'), 'autoload'));


    echo '<div><h1>PHP autoload class example.</h1></div>';

    $first = new First();
    $first->run_first();

    $second = new Second();
    $second->run_second();

    $third = new Third();
    $third->run_third();

    $fourth = new Fourth();
    $fourth->run_fourth();

?>