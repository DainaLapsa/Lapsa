<?php

class Odometer
{
    public $mileage;
    public function __construct(int $mileage)
    {
        $this->mileage = $mileage;
    }
    public function reportMileage(): void
    {
        echo "Car’s current mileage: $this->mileage kilometers\n";
    }
    public function increaseMileage(): void
    {
        $this->mileage < 999999 ? $this->mileage++ : $this->mileage = 0;
    }
    public function drive(FuelTank $fueltank)
    {
        while ($fueltank->amount > 0) {
            $fueltank->decreaseFuel();
            for ($i = 0; $i < 10; $i++) {
                $this->increaseMileage();
            }
            $fueltank->getFuel();
            $this->reportMileage();
            echo "\n";
        }
    }
}