<?php

use Product as GlobalProduct;

class Product {
    public $name;
    public $price;
    public function __construct($name = "pasta", $price = 30)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function get_all(){
        print $this->name . " ". "->" . " " . $this->price;
    }
}
$product = new Product(price:90);
$product->get_all();




?>