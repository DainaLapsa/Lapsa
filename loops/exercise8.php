<?php
$min = readline('Min?: ');
$max = readline('Max?: ');

while (!ctype_digit($min) || !ctype_digit($max)) {
    $sum = readline("Invalid input. Please try again: ");

}
class NumberSquare
{
    public function numSquare(int $min, int $max)
    {
        $arr = [];
        for ($n= $min; $n <= $max; $n++) {
            $arr[$n] = $n;
        }
        echo $str = implode('', $arr) . "\n";

        for ($i = $min; $i < $max; $i++) {
            array_push($arr, array_shift($arr));
            echo $str = implode('', $arr) . "\n";
        }
    }
}
$test = new NumberSquare();
$test->numSquare($min, $max);