<?php
require_once 'Vehicle.php';

class Motorcycle extends Vehicle {
    private $type;
    private $tankCapacity;

    public function __construct($plateNumber, $brand, $year, $color, $type, $tankCapacity) {
        parent::__construct($plateNumber, $brand, $year, $color);
        $this->type = $type;
        $this->tankCapacity = $tankCapacity;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Type: " . $this->type . PHP_EOL;
        echo "Tank Capacity: " . $this->tankCapacity . " liters" . PHP_EOL;
    }
}
?>
