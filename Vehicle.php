<?php

class Vehicle {
    public $name;
    public $speed;
    public $mileage;

    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }
}

// Example usage
$vehicle = new Vehicle("Car", 120, 30);
echo "Name: " . $vehicle->name . ", Speed: " . $vehicle->speed . ", Mileage: " . $vehicle->mileage;