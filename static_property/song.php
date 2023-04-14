<?php

class Song {
    public static string $title = "shimels"; // this is class based variable or static property

    function __construct(string $title)
    {
        self::$title = $title; // we use self to access the static variable declared above, and set in the constructor
        
    }

}

print Song::$title; // accessing class based variable