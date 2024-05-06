<?php

class Account
{
    public float $balance = 0;

    public function putMoney(int|float $amount): void
    {
        if ($amount <= 0) {
            throw new Exception('Invalid value');
        }

        $this->balance += $amount;
    }

    public function getMoney(int|float $amount): int|float
    {
        $result = $this->balance - $amount;
        if ($result < 0) {
            throw new Exception('Invalid value');
        }

        return $result;
    }
}

class SubAccount extends Account
{
    public function putMoney(int|float $amount): void
    {
        if ($amount <= 0) {
            throw new Exception('Invalid value');
        }

        // посиленням передумов так робити не можна
        if ($amount > 1000) {
            throw new Exception('Invalid value');
        }

        $this->balance += $amount;
    }

    public function getMoney(int|float $amount): int|float
    {
        // послаблення післяумов, прибрана перевірка на мінусовий баланс так робити не можна
        return $this->balance - $amount;
    }
}
