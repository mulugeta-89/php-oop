<?php
require_once "book.php";
class Digital extends Book {
    public $fileSize;
    public function __construct(string $title, string $author, int $price, int $fileSize)
    {
        parent::__construct($title, $author, $price);
        $this->fileSize = $fileSize;
    }

    public function getFileSize(){
        return $this->fileSize;
    }
}
$digital = new Digital("learning laravel", "shimels", 23, 78);
echo $digital->getTitle() . PHP_EOL;
echo $digital->getAuthor() . PHP_EOL;
echo $digital->getPrice() . PHP_EOL;
echo $digital->getFileSize() . PHP_EOL;
