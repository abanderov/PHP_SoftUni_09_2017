<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 02.10.17
 * Time: 08:34
 */

class Person {
    private $name;
    private $age;

    function setName($name){
        $this->name = $name;
    }

    function setAge($age){
        $this->age = $age;
    }

    function getName($name){
        return $this->name;
    }

    function getAge($age){
        return $this->$age;
    }
}

$pesho = new Person();
$pesho->setName('Pesho');
$pesho->setAge('23');
$gosho = new Person();
$gosho->setName('Gosho');
$gosho->setAge('18');
$stamat = new Person();
$stamat->setName('Stamat');
$stamat->setAge('43');

print_r($pesho);
print_r($gosho);
print_r($stamat);