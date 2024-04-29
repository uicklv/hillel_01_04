<?php

class A
{
    public string $string;
    public function __construct(string $string)
    {
        $this->string = $string;
    }
    public function show()
    {
        echo 'A' . PHP_EOL;
    }
}