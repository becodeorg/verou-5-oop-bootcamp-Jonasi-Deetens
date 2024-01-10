<?php

class Item
{
    private string $name;
    private float $price;
    private string $type;
    private float $tax;

    public function __construct(string $name, float $price, string $type, float $tax)
    {
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->tax = $tax;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getTax()
    {
        return $this->tax;
    }
}