<?php

// La Base 

require_once 'bicycle.php';

// First step Part 2 
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

echo '---------------------------------------------------------------------------------------------';

require_once 'car.php';

// New part 
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);


var_dump(Car::ALLOWED_ENERGIES);

require_once 'truck.php';

echo '---------------------------------------------------------------------------------------------';

// Trucks
require_once 'truck.php';

$truck = new Truck(50, 'Red', 2, 'Gazole');
var_dump($truck);
echo $truck->CapFull();

$truck = new Truck(300, 'Blue', 2, 'Gazole');
var_dump($truck);
$truck->setCapStock(300);
echo $truck->CapFull() . "<br>";


// Moving truck
$truck->getcurrentSpeed = 10;

echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getcurrentSpeed . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getcurrentSpeed . ' km/h' . '<br>';
echo $truck->brake();



