<?php


abstract class product
{
    public float $price;
    public int $stock;

    public function __construct(float $price, int $stock)
    {
        $this->price = $price;
        $this->stock = $stock;
    }

    public abstract function getFullPrice();
}