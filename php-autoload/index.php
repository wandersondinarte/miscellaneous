<?php

    include('classes/Autoloader.class.php');

    //Carrega os diretórios onde as classes instânciadas estão localizadas.
    spl_autoload_register(array(new Autoloader(''), 'autoload'));
    spl_autoload_register(array(new Autoloader('classes/'), 'autoload'));
    spl_autoload_register(array(new Autoloader('classes/anotherclasses/'), 'autoload'));
    spl_autoload_register(array(new Autoloader('../code-example/classfifth/'), 'autoload'));

    echo '<div><h1>PHP autoload class example.</h1></div>';

    //Instância as classes e executa os respectivos métodos.
    $first = new First();
    $first->run_first();

    $second = new Second();
    $second->run_second();

    Third::run_third();

    $fourth = new Fourth();
    $fourth->run_fourth();

    $fifth = new Fifth();
    $fifth->run_fifth();
?>