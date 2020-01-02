<?php
$number = intval(readline("Enter number you want to check: "));

if (!empty($number)) {
    echo $number > 0 ? "Positive.\n" : "Negative.\n";
} else echo "Zero is neither positive or negative.\n";