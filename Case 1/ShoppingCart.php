<?php
require_once("Item.php");
class ShoppingCart
{
    private array $basket;

    public function __construct()
    {
        $this->basket = [];
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

        foreach($this->basket as $item) {
            $amount = $item["amount"];
            $price = $item["item"]->getPrice();
            $totalPrice += $amount * $price;
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