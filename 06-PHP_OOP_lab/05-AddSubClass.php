<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 29.09.17
 * Time: 10:49
 */

Class Car {
    private $brand;
    private $model;
    private $year;

    function __construct($brand, $model, $year, $engine, $horsepower, $seats){
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->engine = $engine;
        $this->horsepower = $horsepower;
        $this->seats = $seats;
    }

    public function setYear($year){
        if(is_numeric($year) && strlen($year == 4)){
            $this->year = $year;
        }
    }
    public function getBrand(){
        return $this->brand;
    }

    public function getModel(){
        return $this->model;
    }

    public function getYear(){
        return $this->year;
    }
}

Class CarDepthInfo extends Car{
    private $engine;
    private $horsepower;
    private $seats;

    public function getEngine(){
        return $this->engine;
    }

    public function getHorsepower(){
        return $this->horsepower;
    }

    public function getSeats(){
        return $this->seats;
    }
}

$car = new Car('opel', 'corsa', '1995', '1.6', '75', '4+1');
print_r($car);