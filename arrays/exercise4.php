<?php

$array1 = new SplFixedArray(10);
$array2 = new SplFixedArray(10);

for ($i = 0; $i < $array1->getSize(); $i++) {
    $array1[$i] = rand(1, 100);
    $array2[$i] = $array1[$i];
}
$array1[$array1->getSize() - 1] = -7;
$output1 = "Array 1: ";
$output2 = "Array 2: ";

for ($k = 0; $k < $array1->getSize(); $k++) {
    $output1 .= $array1[$k] . ' ';
    $output2 .= $array2[$k] . ' ';
}
echo $output1 . PHP_EOL . $output2 . PHP_EOL;
