<?php


class Product {
    public function __construct(public $name = "pasta", public $price = 30) //writing this line of 
    //helps to not write the below lines of code, bro
    {
        // $this->name = $name;
        // $this->price = $price;
    }
    public function get_all(){
        print $this->name . " ". "->" . " " . $this->price;
    }
}
$product = new Product(price:90);
$product->get_all();

?>