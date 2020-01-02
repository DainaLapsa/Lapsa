<?php
class RollTwoDice
{
    public function dices(int $sum)
    {
        $diceSum = 0;
        while ($diceSum != $sum) {
            $diceOne = rand(1, 6);
            $diceTwo = rand(1, 6);
            $diceSum = $diceOne + $diceTwo;
            echo $diceOne . " and " . $diceTwo . " = " . $diceSum . PHP_EOL;
        }
    }
}
$sum = readline('Desired sum(2+): ');

while (!ctype_digit($sum) || $sum < 2) {
    $sum = readline("Invalid input. Please try again: ");
}
$test = new RollTwoDice();
$test->dices($sum);