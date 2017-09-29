<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 29.09.17
 * Time: 09:19
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