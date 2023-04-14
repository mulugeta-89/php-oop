<?php
require_once "song.php";
$song = new Song("alemtam", "shimels bekele");
$song->title = ["abebe", "kebede", "shimels"];
var_dump($song->title);
print $song->title . PHP_EOL;
print $song->author . PHP_EOL;