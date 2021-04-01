<?php
error_reporting(-1);
require_once 'classes/Car.php';


function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car('black', 4, 180, 'volvo');
$car2 = new Car('red', 4, 200, 'bmw');

echo $car1->getCarInfo();
echo $car2->getCarInfo();


function solution($str) 
{
    echo strrev($str);
}
solution('World');

function sum(array $a): float {
    // Your code here
  }