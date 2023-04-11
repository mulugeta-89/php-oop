<?php
require_once "book.php";
class Physical extends Book {
    public $weight;
    public function __construct(string $title, string $author, int $price, int $weight)
    {
        parent::__construct($title, $author, $price);
        $this->weight = $weight;
    }

    public function getWeight(){
        return $this->weight;
    }
}

$physical = new Physical("love unto death", "hadis alemayehu", 34, 7);
echo $physical->title . PHP_EOL;
echo $physical->author . PHP_EOL;
echo $physical->price . PHP_EOL;
echo $physical->weight . PHP_EOL;
