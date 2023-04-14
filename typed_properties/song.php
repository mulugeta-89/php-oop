<?php

class Song {
    public string $title; //specifying the type of the property help us to limit the ability of assigning value to it
    public string $author;
    function __construct(string $title, string $author){
        $this->title = $title;
        $this->author = $author;
    }

    
}