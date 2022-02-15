<?php

$numbers = [];

while (count($numbers) < 15) {
    $num = rand(1,100);

    if(!in_array($num, $numbers)) {
        $numbers[] = $num;
    }
}

var_dump($numbers);