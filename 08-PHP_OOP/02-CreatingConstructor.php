<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 02.10.17
 * Time: 08:41
 */

class Person {
    private $name;
    private $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
        echo $this->name.' '.$this->age;
    }

//    function setName($name){
//        $this->name = $name;
//    }
//
//    function setAge($age){
//        $this->age = $age;
//    }
//
//    function getName($name){
//        return $this->name;
//    }
//
//    function getAge($age){
//        return $this->$age;
//    }
}

$data = [];
while($input = trim(fgets(STDIN))){
    $data[] = $input;
}

$person = new Person($data[0], $data[1]);
//print_r($person);




