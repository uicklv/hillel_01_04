<?php

//$path = 'test.txt';
//if (!file_exists($path)) {
//    return;
//}
//
//$filesize = filesize($path);
//$file = fopen($path, 'r');
//
//$text = fread($file, $filesize);
//
//fclose($file);
//
//print_r($text);

//$path = 'test.txt';
//if (!file_exists($path)) {
//    return;
//}
//
//$filesize = filesize($path);
//$file = fopen($path, 'r');
//$content = [];
//
//while (($line = fgets($file)) !== false) {
//    $content[] = trim($line);
//}
//
//fclose($file);
//
//print_r($content);


//require_once __DIR__ . '/functions/functions.php';
//
//foreach (fileReader('test.txt') as $line) {
//    echo $line;
//}


//$path = 'test.txt';
//$file = fopen($path, 'a');
//$text = fwrite($file, "My content 1 \n");
//
//fclose($file);

//echo date('d/m/Y H:i:s') . PHP_EOL;

//logger('Opened lesson7.php file');
//logger('Fatal error', 'error');

//file
//$content = file_get_contents('test.txt');
//
//print_r($content);

//file_put_contents('test.txt', 'Test string', FILE_APPEND);
//file_put_contents('test2.txt', 'Test string 2');

//$content = file('test.txt');
//
//print_r($content);

//rename('test_new.txt', 'logs/test_new.txt');

//unlink('logs/test_new.txt');

//$file = fopen('logs/22_04_2024.txt', 'r+');
//
//fgets($file);
//fseek($file, 4, SEEK_CUR);
//fwrite($file, '1');
//fclose($file);
//
//mb_substr();
//substr();

//create
//$id = uniqid();
//$name = 'Kate';
//$email = 'kate@gmail.com';
//file_put_contents('users.txt', "$id|$name|$email\n", FILE_APPEND);

//read
//$users = file('users.txt');
//foreach ($users as $key => $user) {
//    $user = explode('|', $user);
//
//    array_walk($user, function (&$value) {
//        $value = trim($value);
//    });
//
//    $users[$key] = $user;
//}
//
//// delete
//$id = '66269d85b2a76';
//$users = array_filter($users, function ($user) use ($id) {
//    return $user[0] !== $id;
//});
//
//// write
//unlink('users.txt');
//foreach ($users as $user) {
//    file_put_contents('users.txt', "$user[0]|$user[1]|$user[2]\n", FILE_APPEND);
//}

//echo "Старт <br>";
//for ($i = 1; $i <= 10; $i++) {
//    echo "Крок $i <br>";
//    flush();
//    sleep(1);
//}
//
//echo "Завершено <br>";

//ob_start();
//ob_get_clean();
//ob_end_clean();
//ob_get_contents();
//ob_flush();

//ob_start();
//
//echo "Hello, {name}";
//
//$content = ob_get_clean();
//
//
//echo str_replace('{name}', 'Jim', $content);

//$array = ['name' => 'Jim'];
//extract($array);
//
//echo $name;

//define('TEST', 'test');
//
//$test = 'TEST';
//define($test, 123);

//if (!defined('TEST')) {
//    define('TEST', 123);
//}
//
//echo TEST;


//if(true) {
//    const TEST = 'test';
//}

//echo TEST;







