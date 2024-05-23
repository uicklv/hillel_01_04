<?php
session_start();

require_once 'system/Request.php';
require_once 'system/Router.php';
require_once 'system/Router.php';
require_once 'system/View.php';
require_once 'system/Functions.php';
require_once 'system/Validator.php';
require_once 'system/Session.php';
require_once 'system/Response.php';
define('APP_DIR', __DIR__ . '/');
define('CONTROLLERS_DIR', APP_DIR . 'controllers/');
define('VIEWS_DIR', APP_DIR . 'views/');

$router = new Router();

$router->addRoute('/register', [
    'get' => 'AuthController@register',
    'post' => 'AuthController@registerProcess',
]);

$router->addRoute('/login', [
    'get' => 'AuthController@login',
    'post' => 'AuthController@auth',
]);

$router->processRoute(Request::getUrl(), Request::getMethod());

