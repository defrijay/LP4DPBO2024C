<?php
require_once 'Garage.php';
require_once 'Car.php';
require_once 'Motorcycle.php';

$garage = new Garage("My Garage", 200.0);

$car1 = new Car("ABC123", "Toyota", 2022, "Red", 5, 4);
$motorcycle1 = new Motorcycle("XYZ456", "Honda", 2020, "Black", "Sport", 10);

$garage->addVehicle($car1);
$garage->addVehicle($motorcycle1);

$garage->displayVehicles();
?>
