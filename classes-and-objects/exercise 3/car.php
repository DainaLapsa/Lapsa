<?php
include 'fueltank.php';
include 'odometer.php';

$fueltank = new FuelTank(0);
$odometer = new Odometer(111000);

while ($fueltank->amount <= 70) {
    $fueltank->increaseAmount();
}
echo "Fuel gauge is full. Car is ready to go!\n";
//
$odometer->drive($fueltank);