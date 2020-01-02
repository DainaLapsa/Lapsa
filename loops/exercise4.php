<?php
$end = readline("Enter a positive whole integer that is bigger than 1: ");

while (!ctype_digit($end) || $end<1) {
    $end=readline("Invalid input. Please try again: ");
}

function FizzBuzz(int $end)
{
    $start = 1;
    $count = 0;
    for ($i = $start; $i <= $end; $i++) {
        switch ($i) {
            case $i % 3 == 0 && $i % 5 == 0:
                echo "FizzBuzz ";
                break;
            case $i % 3 == 0:
                echo "Fizz ";
                break;
            case $i % 5 == 0:
                echo "Buzz ";
                break;
            default:
                echo $i . " ";
        }
        $count++;
        if ($count === 20) {
            echo "\n";
            $count = 0;
        }
    }
    echo '' . PHP_EOL;
}
FizzBuzz($end);