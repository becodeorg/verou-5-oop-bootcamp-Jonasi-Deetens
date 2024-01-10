<?php
require_once("ShoppingCart.php");
require_once("Item.php");

$shoppingCart = new ShoppingCart();

$banana = new Item("Banana", 1, "Fruit", 0.06);
$apple = new Item("Apple", 1.5, "Fruit", 0.06);
$wine = new Item("Wine", 10, "Wine", 0.21);

$shoppingCart->addItem($banana, 6);
$shoppingCart->addItem($apple, 3);
$shoppingCart->addItem($wine, 2);

echo "<br>";
echo "Total price: &euro;" . number_format($shoppingCart->getTotalPrice(), 2);