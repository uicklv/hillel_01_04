<?php

trait Math
{
//    private int $number = 10;
    private function sum(float $num1, float $num2): float
    {
        return $num1 + $num2;
    }

    private function power(float $number, int $power = 2): int
    {
        return pow($number, $power);
    }

    private function sameMethod(): void
    {
        echo 'From Math' . PHP_EOL;
    }
}