<?php

session_start();

define('WEBROOT', dirname(__FILE__));
define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));
define('ROOT', dirname(WEBROOT));
define('DS', DIRECTORY_SEPARATOR);
define('CORE', ROOT . DS . 'core');
define('HOST', "http://$_SERVER[HTTP_HOST]");
define('URL', "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

require "vendor/autoload.php";

use App\Resources\Launcher;

//Initialize & launch app
Launcher::instance()->start();
