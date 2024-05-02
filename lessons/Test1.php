<?php

class Test1 extends Test2
{
    use Math;

    public function test(): void
    {
        echo $this->power(5) . PHP_EOL;
    }

    public function power(float $number, int $power = 2): float
    {
        var_dump($this->isInt(5));
        return $number / $power;
    }
}