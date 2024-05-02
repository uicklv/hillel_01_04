<?php
//Model
//View
//Controller

define('APP_DIR', __DIR__ . '/');

require_once 'system/Config.php';
require_once 'system/LogType.php';
require_once 'system/Logger.php';
require_once 'system/Validator.php';
require_once 'controllers/AuthController.php';

try {
    $controller = new AuthController();
    $controller->register();
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}



//Logger::log('hello test');
//Logger::action('test action');
//Logger::info('test info');
//Logger::error('test error');

//StaticA::showName();
//StaticB::showName();
//StaticC::showName();

//$test1 = new Test1();
//$test1->test();
//
//$test2 = new Test2();
//$test2->test();


