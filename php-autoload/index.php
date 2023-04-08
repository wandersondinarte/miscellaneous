<?php

require_once('First.class.php');
require_once('Second.class.php');
require_once('Third.class.php');

$first = new First();
$first.run_first();

$second = new Second();
$second.run_second();

$third = new Third();
$third.run_third();

?>