<?php

class Product {
    public $price = 20;
    public $name = "Mulugeta Hailegnaw";
    public function price_doubler(){
        $this->price *= 2;
        $this->name = "shimels bekele";
    }
    public function get_price(){
        return $this->price;
    }
}

$new_product = new Product();
echo $new_product->price . "\n";
echo $new_product->name . "\n";
echo "after the function" . "\n";
$new_product->price_doubler();
$new_product->price_doubler();
echo $new_product->price . "\n";
echo $new_product->name;


?>