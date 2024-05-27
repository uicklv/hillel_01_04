<?php
//setcookie('test', 'test value', time() + 3600);

//echo $_COOKIE['test'];
//$_COOKIE['test'] = 'test value 2';
//setcookie('test', 'test value 2', time() + 3600);
//setcookie('test', '', time() - 3600);
////setcookie('test', 'test value', time() + 3600, '/', 'my.example.com', true, true);
//exit;


session_start();

define('APP_DIR', __DIR__ . '/');
define('CONTROLLERS_DIR', APP_DIR . 'controllers/');
define('VIEWS_DIR', APP_DIR . 'views/');
define('DB_DRIVER', 'mysql');
define('DB_HOST', 'mysql');
define('DB_PORT', '3306');
define('DB_NAME', 'hillel');
define('DB_USER', 'root');
define('DB_PASSWORD', 'password');

require_once APP_DIR . 'system/Request.php';
require_once APP_DIR . 'system/Router.php';
require_once APP_DIR . 'system/Router.php';
require_once APP_DIR . 'system/View.php';
require_once APP_DIR . 'system/Functions.php';
require_once APP_DIR . 'system/Validator.php';
require_once APP_DIR . 'system/Session.php';
require_once APP_DIR . 'system/Response.php';
require_once APP_DIR . 'database/Connect.php';
require_once APP_DIR . 'system/Auth.php';

$router = new Router();

$router->addRoute('/', [
    'get' => 'HomeController@index'
]);

$router->addRoute('/register', [
    'get' => 'AuthController@register',
    'post' => 'AuthController@registerProcess',
]);

$router->addRoute('/login', [
    'get' => 'AuthController@login',
    'post' => 'AuthController@auth',
]);

$router->addRoute('/logout', [
    'get' => 'AuthController@logout',
]);

$router->processRoute(Request::getUrl(), Request::getMethod());

