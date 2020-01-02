<?php
function CheckOddEven(int $num)
{
    switch ($num) {
        case $num % 2 === 0:
            echo 'Even Number.';
            break;
        case $num % 2 != 0:
            echo "Odd Number.";
            break;

    }
    echo ' Bye!';
}

var_dump(CheckOddEven(8));
