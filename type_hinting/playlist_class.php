<?php

class Playlist {
    public $songs = [];
    public function addSongs($song) {
        $this->songs[] = $song;
    }
    public function get_all(){
        foreach($this->songs as $song) {
            print $song->name . "\n";
        }
    }
}