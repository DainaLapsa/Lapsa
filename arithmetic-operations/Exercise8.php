<?php
$employees = [
    [7.50, 35],
    [8.20, 47],
    [10.00, 73]
];
function salaryCalculator(int $base_pay, int $hours_worked)
{
    if ($base_pay < 8 || $hours_worked > 60) {
        echo 'Error.' . PHP_EOL;
    } else {
        echo $base_pay * $hours_worked . PHP_EOL;
    };
}

foreach ($employees as $employee) {
    salaryCalculator($employee[0], $employee[1]);
}