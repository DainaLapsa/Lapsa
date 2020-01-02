<?php
$comp_choice = rand(1, 100);
$human_choice = readLine('I\'m thinking of a number between 1-100.  Try to guess it.');

switch ($human_choice) {
    case $human_choice < $comp_choice;
        echo 'Sorry, you are too low.  I was thinking of ' . $comp_choice.PHP_EOL;
        break;
    case $human_choice > $comp_choice;
        echo 'Sorry, you are too high.  I was thinking of ' . $comp_choice.PHP_EOL;
        break;
    case $human_choice=$comp_choice;
    echo 'You guessed it!  What are the odds?!?';
}