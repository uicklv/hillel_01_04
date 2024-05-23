<?php

namespace lessons;
trait Validator
{
    protected function isInt(mixed $value): bool
    {
        return is_int($value);
    }

    public function maxLength(string $string, int $length = 100): bool
    {
        return strlen($string) < $length;
    }

    private function sameMethod(): void
    {
        echo 'From Validator' . PHP_EOL;
    }
}