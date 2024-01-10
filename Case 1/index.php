<?php

$basket = [
    ["item" => "Banana's", "Amount" => 6, "Price" => 1, "Type" => "Fruit"],
    ["item" => "Apples", "Amount" => 3, "Price" => 1.5, "Type" => "Fruit"],
    ["item" => "Bottles of wine", "Amount" => 2, "Price" => 10, "Type" => "Wine"]
];

function getTotalTax($basket)
{
    $totalTax = 0;

    foreach($basket as $item) {
        $amount = $item['Amount'];
        $price = $item['Price'];
        if ($item["Type"] === "Fruit") $totalTax += $amount * $price * 0.06;
        else $totalTax += $amount * $price * 0.21;
    };

    return $totalTax;
}

function getTotalPrice($basket)
{
    $totalPrice = 0;

    foreach($basket as $item) {
        $amount = $item['Amount'];
        $price = $item['Price'];
        $totalPrice += $amount * $price;
    };

    return $totalPrice;
}

$total = getTotalPrice($basket);
echo "Total price: &euro;" . number_format($total, 2); 
echo "<br>";

$totalTax = getTotalTax($basket);
echo "Total tax: &euro;" . number_format($totalTax, 2); 

require_once("ShoppingCart.php");
require_once("Item.php");

$shoppingCart = new ShoppingCart();

$banana = new Item("Banana", 1, "Fruit", 0.06);
$apple = new Item("Apple", 1.5, "Fruit", 0.06);
$wine = new Item("Wine", 10, "Fruit", 0.21);

$shoppingCart->addItem($banana, 6);
$shoppingCart->addItem($apple, 3);
$shoppingCart->addItem($wine, 2);

echo "<br>";
echo "Total price: &euro;" . number_format($shoppingCart->getTotalPrice(), 2);
echo "<br>";
echo "Total tax: &euro;" . number_format($shoppingCart->getTotalTax(), 2);