<?php

class Song {
    public $name;
    public $numberOfPlays;
    function __construct(string $name, int $plays) //this method is called type-hinting which makes is that
    // if we don't pass the correct argument type, it gonna cause some problem
    {
        $this->name = $name;
        $this->numberOfPlays = $plays;
    }
    public function get_all(){
        print $this->name . "->". $this->numberOfPlays;
    }

}