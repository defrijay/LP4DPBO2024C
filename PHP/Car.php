<?php
require_once 'Vehicle.php';

class Car extends Vehicle {
    private $numOfSeats;
    private $numOfDoors;

    public function __construct($plateNumber, $brand, $year, $color, $numOfSeats, $numOfDoors) {
        parent::__construct($plateNumber, $brand, $year, $color);
        $this->numOfSeats = $numOfSeats;
        $this->numOfDoors = $numOfDoors;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Number of Seats: " . $this->numOfSeats . PHP_EOL;
        echo "Number of Doors: " . $this->numOfDoors . PHP_EOL;
    }
}
?>
