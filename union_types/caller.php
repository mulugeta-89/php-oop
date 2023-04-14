<?php
require_once "song.php";
$song = new Song("almentam", "shiemsl bekele", 4.5);

print $song->title . PHP_EOL;
print $song->author . PHP_EOL;
print $song->get_price() . PHP_EOL;