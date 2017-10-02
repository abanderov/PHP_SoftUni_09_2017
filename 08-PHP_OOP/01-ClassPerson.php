<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 02.10.17
 * Time: 08:27
 */

class Person {
    public $name = 'Pesho';
    public $age = '14';

}

$person = new Person();
echo (count(get_object_vars($person)));