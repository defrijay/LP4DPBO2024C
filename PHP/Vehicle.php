<?php
class Vehicle {
    protected $plateNumber;
    protected $brand;
    protected $year;
    protected $color;

    public function __construct($plateNumber, $brand, $year, $color) {
        $this->plateNumber = $plateNumber;
        $this->brand = $brand;
        $this->year = $year;
        $this->color = $color;
    }

    public function displayInfo() {
        echo "Plate Number: " . $this->plateNumber . PHP_EOL;
        echo "Brand: " . $this->brand . PHP_EOL;
        echo "Year: " . $this->year . PHP_EOL;
        echo "Color: " . $this->color . PHP_EOL;
    }
}
?>
