<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 28.09.17
 * Time: 15:58
 */

Class Car {
    private $brand;
    private $model;
    private $year;

    function setBrand($new_brand){
        $this->brand = $new_brand;
    }
    function getBrand(){
        return $this->brand;
    }

    function setModel($new_model){
        $this->model = $new_model;
    }
    function getModel(){
        return $this->model;
    }

    function setYear($new_year){
        $this->year = $new_year;
    }
    function getYear(){
        return $this->year;
    }
}

$c1 = new Car();
$c1->setBrand('Opel');
$c1->setModel('Corsa');
$c1->setYear ('1994');
$c2 = new Car();
$c2->setBrand('VW');
$c2->setModel('Jetta');
$c2->setYear ('1994');
$c3 = new Car();
$c3->setBrand('Fiat');
$c3->setModel('Punto');
$c3->setYear ('1994');

print_r($c1);
print_r($c2);
print_r($c3);
