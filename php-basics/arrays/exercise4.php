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
for ($j = 0; $j < $array1->getSize(); $j++) {
    $output1 .= $array1[$j] . ' ';
    $output2 .= $array2[$j] . ' ';
}
echo $output1 . PHP_EOL . $output2 . PHP_EOL;
