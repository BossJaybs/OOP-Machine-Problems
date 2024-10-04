<?php

class Vehicle {
    public static $wheels = 4;

    public static function getWheels() {
        return self::$wheels;
    }
}

class Bus extends Vehicle {
    // Inherits the static property and method
}

class Car extends Vehicle {
    // Inherits the static property and method
}

// Example usage
echo "Vehicle wheels: " . Vehicle::getWheels() . "\n";
echo "Bus wheels: " . Bus::getWheels() . "\n";
echo "Car wheels: " . Car::getWheels() . "\n";

// Changing the static property
Vehicle::$wheels = 6;

echo "Updated Vehicle wheels: " . Vehicle::getWheels() . "\n";
echo "Updated Bus wheels: " . Bus::getWheels() . "\n";
echo "Updated Car wheels: " . Car::getWheels() . "\n";