<?php

require_once "subClass.php";

$sub = new Sub();
print $sub->get_name() . PHP_EOL;
print $sub->get_selamta() . PHP_EOL;
print $sub->get_dances() . PHP_EOL;
print $sub->getParentMethod();