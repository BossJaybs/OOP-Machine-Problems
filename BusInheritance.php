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

class Bus extends Vehicle {
    // Bus inherits all properties and methods from Vehicle
}

// Example usage
$bus = new Bus("School Bus", 60, 10);
echo "Name: " . $bus->name . ", Speed: " . $bus->speed . ", Mileage: " . $bus->mileage;