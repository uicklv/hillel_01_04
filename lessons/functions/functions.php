<?php

use hillel_01_04\lessons\MainPost;
use hillel_01_04\lessons\MessageInterface;

function logger(string $message, $type = 'action'): bool
{
    $types = ['action', 'error'];
    if (!in_array($type, $types)) {
        return false;
    }

    $filePath = 'logs/' . date('d_m_Y') . '.txt';
    $message = "[$type]" . $message . PHP_EOL;
    $file = fopen($filePath, 'a');
    $result = fwrite($file, $message);
    fclose($file);

    return (bool)$result;
}
function showMessage(string $message): void
{
    echo $message . PHP_EOL;
}

function fileReader(string $filePath): Generator|false
{
    if (!file_exists($filePath)) {
        return false;
    }

    $file = fopen($filePath, 'r');
    while (($line = fgets($file)) !== false) {
        yield $line;
    }

    fclose($file);
}

function includeTemplate(string $path, array $variables = []): string
{
    if ($variables) {
        extract($variables);
    }

    ob_start();

    include $path;

    return ob_get_clean();
}

function showPost(MainPost $post)
{
    echo $post->getBody();
}

function send(MessageInterface $messenger, string $message)
{
    $messenger->send($message);
}


//function showPost($post)
//{
//    if ($post instanceof Post) {
//        echo "<h3>{$post->getTitle()}</h3><p>{$post->getContent()}</p>";
//    } elseif($post instanceof News) {
//        echo "<i>{$post->getTitle()}</i>:{$post->getContent()}";
//    }
//}

