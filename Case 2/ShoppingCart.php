<?php
require_once("Item.php");
class ShoppingCart
{
    private array $basket;
    private array $discounts;

    public function __construct()
    {
        $this->basket = [];
        $this->discounts = ["Fruit" => 0.5];
    }

    public function getBasket()
    {
        return $this->basket;
    }

    public function addItem(Item $item, int $amount)
    {
        $this->basket[] = ["item" => $item, "amount" => $amount];
    }

    public function getTotalPrice()
    {
        $totalPrice = 0;

        var_dump($this->basket);
        foreach($this->basket as $item) {
            $amount = $item["amount"];
            $price = $item["item"]->getPrice();
            if (array_key_exists($item["item"]->getType(), $this->discounts)) $totalPrice += $amount * $price * ($this->discounts[$item["item"]->getType()]);
            else $totalPrice += $amount * $price;
        };

        return $totalPrice;
    }

    public function getTotalTax()
    {
        $totalTax = 0;

        foreach($this->basket as $item) {
            $amount = $item['amount'];
            $price = $item['item']->getPrice();
            $tax = $item['item']->getTax();
            $totalTax += $amount * $price * $tax;
        };

        return $totalTax;
    }
}