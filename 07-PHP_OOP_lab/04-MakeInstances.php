<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 28.09.17
 * Time: 17:06
 */

Class Car {
    private $brand;
    private $model;
    private $year;

    function __construct($brand, $model, $year){
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
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
$cars = [];
for ($i=0; $i<4;$i++){
    $input = explode(' ',trim(fgets(STDIN)));
    $car = new Car($input[0], $input[1], $input[2]);
    $cars[] = $car;
}

asort($cars);
foreach ($cars as $car){
    $brand = $car->getBrand($car);
    $model = $car->getModel($car);
    $year = $car->getYear($car);
    echo "$brand, " . "$model, " . "$year \n";
}
