<?php
function BMImetric(int $weight, int $height)
{
    $bmi = $weight / ($height^2);
    echo 'BMI = '.round($bmi,2).". ";
    switch($bmi)
    {
        case $bmi<18.5:
            echo "Underweight.";
            break;
        case $bmi>25:
            echo "Overweight.";
            break;
        default:
            echo "Optimal weight.";
    }
    echo ''.PHP_EOL;
}

function BMIimperial(int $weight, int $height)
{
    $bmi = 703*$weight / ($height^2);
    echo 'BMI = '.round($bmi,2).". ";
    switch($bmi)
    {
        case $bmi<18.5:
            echo "Underweight.";
            break;
        case $bmi>25:
            echo "Overweight.";
            break;
        default:
            echo "Optimal weight.";
    }
    echo ''.PHP_EOL;
}
BMImetric(50, 1.50);