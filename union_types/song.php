<?php

class Song {
    public string $title; //specifying the type of the property help us to limit the ability of assigning value to it
    public string $author;
    private int|float $price; // making this allow us to take multiple type of a variable // union types
    function __construct(string $title, string $author, int|float $price){
        $this->title = $title;
        $this->author = $author;
        if($price > 5) {
            $this->price = 5;
        }
        elseif($price < 0) {
            $this->price = 0;
        } else {
            $this->price = $price;
        }
    }
    function get_price():int|float{
        return $this->price;
    }

    
}