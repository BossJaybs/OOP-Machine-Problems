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
    public function seating_capacity($capacity = 50) {
        return $capacity;
    }
}

// Example usage
$bus = new Bus("City Bus", 50, 8);
echo "Seating Capacity: " . $bus->seating_capacity();
echo "\nSeating Capacity (custom): " . $bus->seating_capacity(40);