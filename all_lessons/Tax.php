<?php

class Tax
{
    private int $taxRate = 10;

    public function calculate(float $total): float
    {
        $total += percent($total, $this->taxRate);
        return $total;
    }
}