<?php

class Book {
    public $title;
    public $author;
    function __construct(string $title, string $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
    
}