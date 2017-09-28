<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 28.09.17
 * Time: 08:44
 */

$animals = [
    [ 'name' => 'Waffles', 'type' => 'dog','age' => 12],
    [ 'name'=> 'Fluffy', 'type' => 'cat', 'age' => 14],
    [ 'name'=> 'Spelunky', 'type' => 'dog','age' => 4],
    [ 'name' => 'Hank', 'type' => 'dog','age' => 11],
];
$youngDog = function($animals){
    if ($animals['type'] == 'dog' && $animals['age'] < 11) {
        return true;
    } else {
        return false;
    }
};
$result = array_filter($animals,$youngDog);

print_r($result);
