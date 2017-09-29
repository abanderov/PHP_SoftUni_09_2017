<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 29.09.17
 * Time: 11:26
 */

$ano_obj = new class{
    public $brand = 'opel';
    public $model = 'vectra';
    public $year = '1997';
    public $engine = '1.8';
    public $horsepower = '120';
    public $seats = '4';
    public $doors = '4+1';
    public $tyres = 'good';
    public $paint = 'metalic';
    public $color = 'back';
    public $lights = 'bright';

//    function __construct($brand, $model, $year){
//        $this->brand = $brand;
//        $this->model = $model;
//        $this->year = $year;
//    }
//
//    public function getBrand(){
//        return $this->brand;
//    }
//
//    public function getModel(){
//        return $this->model;
//    }
//
//    public function getYear(){
//        return $this->year;
//    }
};

foreach ($ano_obj as $key => $value){
    echo "$key ->" . " $value\n";
}