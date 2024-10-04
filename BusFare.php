<?php

class Vehicle {
    public $seating_capacity;

    public function __construct($seating_capacity) {
        $this->seating_capacity = $seating_capacity;
    }

    public function fare() {
        return $this->seating_capacity * 100;
    }
}

class Bus extends Vehicle {
    public function fare() {
        $fare = parent::fare();
        $maintenance_charge = $fare * 0.1;
        return $fare + $maintenance_charge;
    }
}

// Example usage
$bus = new Bus(50);
$total_fare = $bus->fare();

echo "Total fare for the bus: $" . $total_fare;