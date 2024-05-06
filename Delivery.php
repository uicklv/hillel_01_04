<?php

class Delivery
{
    private int $deliveryRate = 10;

    public function calculate(float $total): float
    {
        $total += percent($total, $this->deliveryRate);
        return $total;
    }
}