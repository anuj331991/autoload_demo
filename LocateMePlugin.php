<?php
ini_set('display_errors', 1);

use LocateMe\Utilities\Logger;
use LocateMe\Utilities\Fruit;

require_once __DIR__ . '/vendor/autoload.php';

$obj = new Logger();
echo $obj->getLog();

$fruit = new Fruit();
echo $fruit->getFruit();



?>