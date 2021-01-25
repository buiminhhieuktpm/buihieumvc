<?php
include_once __DIR__.'/../../Mvc/vendor/autoload.php';

use Mvc\Dispatcher;

define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

$dispatch = new Dispatcher(); 
$dispatch->dispatch();

?>