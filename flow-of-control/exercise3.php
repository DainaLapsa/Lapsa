
<?php
$number = readline("Enter a positive number: ");

while($number<0 || !ctype_digit($number))
{
    $number = readline("Invalid input.Please try again: ");
}
function countDigits($number)
{
    echo "Number of digits: " . count(str_split($number)) . PHP_EOL;
}
countDigits($number);