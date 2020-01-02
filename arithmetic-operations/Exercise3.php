<?php


$start = 1;
$end = 100;
$sum = 0;

for ($i = $start; $i <= $end; $i++) {
    $sum += $i;
$sumarray []=$i;
}
echo 'The sum of ' . $start . ' to ' . $end . ' is ' . $sum.PHP_EOL;

$avg = array_sum($sumarray) / count($sumarray);

echo 'The average is '.$avg.' ';