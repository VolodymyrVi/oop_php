<?php
error_reporting(-1);
require_once 'classes/Car.php';


function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car();
$car2 = new Car();



//$car1->color = 'black';
$car1->brand = "volvo";
$car1->speed = "180";
$car1->year = 2008;
$car1->colour = 'red';




$car2->color = 'white';
$car2->brand = "bmw";
$car2->speed = "200";
$car2->year = 2022;


/* debug($car1);
debug($car2);
 */
echo "<h3>About my car:</h3>
        Brand car: {$car1->brand} <br>
        Color car: {$car1->color}<br>
        Wheels car:{$car1->wheels} <br>
        Year car: {$car1->year}<br>
        Speed car: {$car1->speed}<br>";


debug($car1);