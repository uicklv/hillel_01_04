<?php

class StaticA
{
    public static string $name = 'StaticA';

    public static function showName()
    {
        echo static::$name . PHP_EOL;
    }
}