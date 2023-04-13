<?php
require_once "book.php";
class Books {
    private $books = [];

    public function add_book(Book $book) {
        $this->books[] = $book;
    }
    public function get_books(){
        foreach($this->books as $book){
            print $book->title . PHP_EOL;
            print $book->author . PHP_EOL;
        }
    }

}