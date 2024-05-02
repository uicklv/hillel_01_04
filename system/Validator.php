<?php

trait Validator
{

    public function validate(array $data, array $rules)
    {

    }

    public function required(string $name)
    {

    }

    public function isEqual(string $string1, string $string2): bool
    {
        return $string1 === $string2;
    }

    public function maxLength(string $string, int $max): bool
    {
        return strlen($string) < $max;
    }

    public function minLength(string $string, int $min): bool
    {
        return strlen($string) > $min;
    }
}