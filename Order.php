<?php

class Order
{
    private array $items = [];

    private ?DiscountInterface $discount;

    public function __construct(array $items, ?DiscountInterface $discount = null)
    {
        $this->setItems($items);
        $this->discount = $discount;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        $this->validate($items);
        $this->items = $items;
    }

    private function validate(array $items): void
    {
        foreach ($items as $item) {
            if (!isset($item['name'], $item['price'], $item['amount'])) {
                throw new Exception('Invalid item structure');
            }

            if ($item['price'] <= 0 || $item['amount'] <= 0) {
                throw new Exception('Invalid item price or amount');
            }
        }
    }

    public function total(): float
    {
        $total = 0;
        $items = $this->getItems();
        foreach ($items as $item) {
            $total += $item['amount'] * $item['price'];
        }

        if (!is_null($this->discount)) {
            $total = $this->discount->applyDiscount($total);
        }

        return $total;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }
}