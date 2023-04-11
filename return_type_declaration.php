<?php

class Songs {
    public $artists = [];
    public function add_artist($name):void {
        array_push($this->artists, $name);
    }
    public function get_length():int{
        return count($this->artists);
    }
}

$song = new Songs;
$song->add_artist("Mulugeta");
$song->add_artist("shimels");
$song->add_artist("alemu");
print $song->get_length();