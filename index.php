<?php

$x = rand(360, 410) / 10;

$answer = $x < 37.7 ? "«Здоров!»" : "«Хворий!»";

if ($answer == 37.7){
    $answer = "«Щось нездужає…»";
}

echo $x.", ".$answer;