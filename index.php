<?php
//define('APP_DIR', __DIR__ . '/');


require_once 'functions/functions.php';
$blogs = [
    ['title' => 'Blog 1', 'content' => 'content 1'],
    ['title' => 'Blog 2', 'content' => 'content 2'],
];
$blogTitle = 'Test';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> metaTitle </title>
</head>
<body>
    <h1>Our blogs</h1>
    <?php foreach ($blogs as $blog) {
        echo includeTemplate('views/_blog.php',
            ['blogTitle' => $blog['title'], 'blogContent' => $blog['content']]);
//        $blogTitle = $blog['title'];
//        $blogContent = $blog['content'];
//        include 'views/_blog.php';
    } ?>
</body>
</html>


