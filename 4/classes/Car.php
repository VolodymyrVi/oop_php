<?php

class Car
{
    public $color;
    public $wheels;
    public $speed;
    public $brand;


/*     public function __construct($color, $wheels, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
        echo __METHOD__ . '<br>';
    } */
    public function getCarInfo()
    {
        return "<h3>About my car:</h3>
        Brand car: {$this->brand} <br>
        Color car: {$this->color}<br>
        Wheels car:{$this->wheels} <br>
        Speed car: {$this->speed}<br>";
    }

    public function Car($color, $wheels, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
    }

}