<?php
declare(strict_types=1); // so after u have used type hinting in constructor definition
//u gonna have to use the above code, to correctly implement it
require_once "Song_class.php";
require_once "playlist_class.php";
$song = new Song("abebe beso bela", 45);
$song2 = new Song("ene almetam", 23);
$song3 = new Song("shimels", 4343);
$playlist = new Playlist;
$playlist->addSongs($song);
$playlist->addSongs($song2);
$playlist->addSongs($song3);
$playlist->get_all();
$song->get_all();


