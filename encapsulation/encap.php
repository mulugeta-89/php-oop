<?php
require_once "book.php";
require_once "books.php";
$book = new Book("love unto death", "addis alemayehu");
$book2 = new Book("vlahovic", "nelson mandela");

$books = new Books();
$books->add_book($book);
$books->add_book($book2);
$books->get_books();
// var_dump($books);
