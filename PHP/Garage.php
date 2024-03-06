<?php
require_once 'Vehicle.php';

class Garage {
    private $name;
    private $area;
    private $vehicles = [];

    public function __construct($name, $area) {
        $this->name = $name;
        $this->area = $area;
    }

    public function addVehicle($vehicle) {
        $this->vehicles[] = $vehicle;
    }

    public function displayVehicles() {
        echo "Garage: " . $this->name . ", Area: " . $this->area . " sqm" . PHP_EOL;
        echo "Vehicles:" . PHP_EOL;
        foreach ($this->vehicles as $vehicle) {
            $vehicle->displayInfo();
            echo PHP_EOL;
        }
    }
}
?>
