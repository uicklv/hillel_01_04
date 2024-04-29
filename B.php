<?php

class B extends A
{
    public string $stringB;

    public function __construct(string $string, string $stringB)
    {
        parent::__construct($string);
        $this->stringB = $stringB;
    }

    public function show()
    {
        parent::show();
        echo 'B' . PHP_EOL;
    }
}