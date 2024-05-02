<?php


use hillel_01_04\lessons\Order;
use hillel_01_04\lessons\PercentageDiscount;

require_once __DIR__ . '/functions/functions.php';
require_once __DIR__ . '/Dynamic.php';
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/FileExtension.php';
require_once __DIR__ . '/File.php';
require_once __DIR__ . '/MainPost.php';
require_once __DIR__ . '/Post.php';
require_once __DIR__ . '/News.php';
require_once __DIR__ . '/VideoBlog.php';
require_once __DIR__ . '/A.php';
require_once __DIR__ . '/B.php';
require_once __DIR__ . '/DiscountInterface.php';
require_once __DIR__ . '/FixedDiscount.php';
require_once __DIR__ . '/Order.php';
require_once __DIR__ . '/PercentageDiscount.php';


$items = [
    ['name' => 'Notebook', 'price' => 25000, 'amount' => 1],
    ['name' => 'Phone', 'price' => 40000, 'amount' => 2],
];

//$discount = new FixedDiscount(100, 1000);
$discount = new PercentageDiscount(50, 1000);
$order = new Order($items, $discount);

echo $order->total();

//$a = new A("string A\n");
////echo $a->string;
//$b = new B("string A\n", "string B\n");
//
//echo $b->string;

//$a->show();
//$b->show();


//try {
//    $post = new Post('post title', 'post content');
//    $news = new News('news title', 'news content');
////    $mainPost = new MainPost('main title', 'main content');
//    $videoPost = new VideoBlog('video title', 'video content');
//
//    showPost($videoPost);
//    showPost($post);
//    showPost($news);
////var_dump($post instanceof Post);
////var_dump($post instanceof MainPost);
////var_dump($mainPost instanceof Post);
////    echo $post->getBody();
////    echo $news->getBody();
//} catch (Exception $exception) {
//    echo $exception->getMessage();
//}

//print_r(FileExtension::values());
//try {
//    $file = new File('test.txt');
//
////    $file->write("my third message \n");
//
//    echo $file->readFirstLine();
//
//} catch (Exception $exception) {
//    echo $exception->getMessage() . PHP_EOL;
//}

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