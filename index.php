<?php


require_once __DIR__ . '/Dynamic.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/FileExtension.php';
require_once __DIR__ . '/File.php';

//print_r(FileExtension::values());
try {
    $file = new File('test.doc');
    $file->changeExtension(FileExtension::DOC);
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}

//try {
//    $user = new User('Jim', 'test@gmail.com', 25);
//
//    $user2 = clone $user;
//    $user2->setName('Kate');
//    $user2->setEmail('kate@gmail.com');
//
//    var_dump($user);
//    var_dump($user2);
//
////    var_dump($user instanceof Dynamic);
//
//
//} catch (Exception $exception) {
//    echo $exception->getMessage() . PHP_EOL;
//} finally {
//    echo 'finally' . PHP_EOL;
//}

//$dynamic = new Dynamic();
//
//$dynamic->name = 'Jim';
//$dynamic->age = 25;
//$dynamic->lastname = 'Jackson';
//$dynamic();
//
//$dynamic->showName(1,2,3);

//var_dump(isset($dynamic->name));

//unset($dynamic->age);
//echo $dynamic->age . PHP_EOL;

//echo $dynamic->name . PHP_EOL;
//echo $dynamic->age . PHP_EOL;
//echo $dynamic->lastname . PHP_EOL;

//$dynamic = new stdClass();
//$dynamic->name = 'test1';
//$dynamic->age = 25;
//$dynamic->lastname = 'test2';
//
//var_dump($dynamic);