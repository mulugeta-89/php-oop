<?php
declare(strict_types=1); // so after u have used type hinting in constructor definition
//u gonna have to use the above code, to correctly implement it
require_once "Song_class.php";
$song = new Song("abebe beso bela", 45);
$song->get_all();
