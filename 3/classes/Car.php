<?php

class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;

    public function getCarInfo()
    {
        return "<h3>About my car:</h3>
        Brand car: {$this->brand} <br>
        Color car: {$this->color}<br>
        Wheels car:{$this->wheels} <br>
        Year car: {$this->year}<br>
        Speed car: {$this->speed}<br>";
    }
}