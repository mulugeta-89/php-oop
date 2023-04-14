<?php

require_once "song.php";
$song = new Song("almetam", "shimels bekele");
$song->title = ["abebe", "shimels"];
print $song->title . PHP_EOL;
print $song->author . PHP_EOL;