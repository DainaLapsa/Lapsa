<?php


$array = rand(1, 9999);
$array = array_map('intval', str_split($array));
$guess = readline('Let\'s play Cows and Bulls! Try to guess my 4 digit number:');
$array2 = array_map('intval', str_split($guess));
echo $array2[0].$array2[1].$array2[2].$array2[3].
var_dump($array);
var_dump($array2);


function arrays($array, $array2){
    return $array==$array2;
}