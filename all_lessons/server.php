<?php

$currentMethod = $_SERVER['REQUEST_METHOD'];

if ($currentMethod === 'POST') {

    $data = file_get_contents('php://input');

    $data = json_decode($data, true);
    echo "<pre>";
    print_r($data);
    echo "<pre>";
    exit;
}

if ($currentMethod === 'PUT') {
    $data = file_get_contents('php://input');

    $data = json_decode($data, true);
    echo "<pre>";
    print_r($data);
    echo "<pre>";
    exit;
}


//$methods = [
//    'POST',
//    'GET'
//];
//$currentMethod = $_SERVER['REQUEST_METHOD'];
//
//if (!in_array($currentMethod, $methods)) {
//
//    header('Location: http://localhost:8080/home.php', true, 302);
//
//    exit;
//}
//
//$name = $_GET['name'];
//$email = $_GET['email'];
//if (empty($name) || empty($email)) {
//    header('Location: http://localhost:8080/home.php', true, 302);
//    exit;
//}
//
//
//header('Content-type: image/png');
//
//$image = file_get_contents('picture.png');
//
//echo $image;

//echo "<h1>Header!</h1>";

//echo "<pre>";
//print_r($_GET);
//echo "<pre>";
//echo "<pre>";
//print_r($_SERVER);
//echo "<pre>";

//
//echo "<pre>";
//print_r($_POST);
//echo "<pre>";
//
//echo "<pre>";
//print_r($_FILES);
//echo "<pre>";