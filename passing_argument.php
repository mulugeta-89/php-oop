<?php

class Product {
    public $price = 20;
    public $name = "Mulugeta Hailegnaw";
    public function order_me($food = "pasta", $drink = "hennessy"){
        echo "you have ordered me " . $food . "\n";
        echo "and also u have ordered me " . $drink . "\n";
    }
}

$new_product = new Product();
$new_product->order_me(drink: "scotch");

?>