<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

echo "Original numeric array: ";
var_dump($numbers);

echo "Sorted numeric array: ";
sort($numbers);
foreach($numbers as $key=>$val){
    echo 'Numbers['.$key.']='.$val.PHP_EOL;
}


$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];
echo 'Original string array:';
var_dump($words);

echo "Sorted string array: ";
sort($words);
foreach($words as $key=>$val){
    echo 'Numbers['.$key.']='.$val.PHP_EOL;
}