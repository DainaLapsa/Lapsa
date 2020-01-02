<?php
class FuelTank
{
    public $fuel;
    public function __construct(int $fuel)
    {
        $this->fuel = $fuel;
    }
    public function getFuel()
    {
        echo "Car’s current level of fuel: $this->fuel litres\n";
    }
    public function increaseFuel()
    {
        $this->fuel <= 70 ? $this->fuel++ : print "Fuel tank is full.\n";
    }
    public function decreaseFuel()
    {
        $this->fuel > 0 ? $this->fuel-- : print "Fuel tank is empty.\n";
    }
}
