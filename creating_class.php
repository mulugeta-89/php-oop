<?php
    class Product {
        public $price = 10;
    }

    $something = new Product();
    print $something->price . "\n";
    $something->price = 100;
    print "something that kind of inflation has just happenned!" . "\n";
    print $something->price . "\n";
?>