<?php
require 'vendor/autoload.php';
$database = require 'core/bootstrap.php';

$router = new Router;

require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');
require $router->direct($uri);

$funct = App::get('database') ->SelectAll('tasks');
// var_dump($funct);