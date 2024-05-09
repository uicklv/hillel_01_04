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

//try {
//    $controller = new AuthController();
//    $controller->register();
//} catch (Exception $e) {
//    echo $e->getMessage() . PHP_EOL;
//}



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

////set name todo bad practice
//$name = 'John';
////set email todo bad practice
//$email = 'email@email.com';
////set number todo bad practice
//$phoneNumber = 234324324324;
//
//$vacancies = [];
//$sectors = [];
////link sectors to vacancies
//foreach ($vacancies as $vacancy) {
//    //todo
//}


//$code = 200;
//$status = true;
//if ($code === 200
//    && $status === true) {
//    echo '200 OK';
//} elseif ($code === 500) {
//    echo '500 Error';
//} else {
//    echo 'not found';
//}

//DRY
//KISS
//YAGNI

//function percent(float $total, int $percent): float|false
//{
//    if ($percent > 100 || $percent < 1) {
//        return false;
//    }
//    return $total * ($percent / 100);
//}
//function sortBubble(array $data)
//{
//    $count_elements = count($data);
//    $iterations = $count_elements - 1;
//    for ($i=0; $i < $count_elements; $i++) {
//        $changes = false;
//        for ($j=0; $j < $iterations; $j++) {
//            if ($data[$j] > $data[($j + 1)]) {
//                $changes = true;
//                list($data[$j], $data[($j + 1)]) = array($data[($j + 1)], $data[$j]);
//            }
//        }
//        $iterations--;
//        if (!$changes) {
//            return $data;
//        }
//    }
//    return $data;
//}
//
//$array = [1,5,2,10,11,4];
//sort($array);
//print_r($array);

//$vacancies = [
//    ['id' => 1, 'title' => 'PHP Developer', 'salary' => 2500],
//    ['id' => 2, 'title' => 'Js Developer', 'salary' => 3000],
//    ['id' => 3, 'title' => 'DevOps', 'salary' => 2000],
//];

//$ids = [];
//foreach ($vacancies as $vacancy) {
//    $ids[] = $vacancy['id'];
//}

//$ids = array_column($vacancies, 'id');
//print_r($ids);


//S - Single responsibility
//O - Open closed
//L - Liskov substitution
//I - interface segregation
//D - Dependency Inversion

//function showContent(Post $post): void
//{
//    if ($post->getType() === 'blog') {
//        echo "<b>{$post->getContent()}</b>";
//    } elseif ($post->getType() === 'news') {
//        echo "<i>{$post->getContent()}</i>";
//    }
//}
//require_once 'SOLID/OpenClosedGoodCode/Post.php';
//require_once 'SOLID/OpenClosedGoodCode/Blog.php';
//require_once 'SOLID/OpenClosedGoodCode/News.php';
//
//function showContent(Post $post): void
//{
//    $post->showContent();
//}
//
//$post = new Blog('blog content');
//$news = new News('news content');
//showContent($news);


//
//enum Type: string
//{
//    case PROCESS = 'process';
//    case ERROR = 'error';
//    case SUCCESS = 'success';
//}
//
//
//function test(Type $enum)
//{
//    echo $enum->value;
//}
//
//test(Type::SUCCESS);




