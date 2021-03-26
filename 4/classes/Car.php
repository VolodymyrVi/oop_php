<?php

class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;


    public function __construct($color, $wheels, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
    }
    public function getCarInfo()
    {
        return "<h3>About my car:</h3>
        Brand car: {$this->brand} <br>
        Color car: {$this->color}<br>
        Wheels car:{$this->wheels} <br>
        Speed car: {$this->speed}<br>";
    }
}