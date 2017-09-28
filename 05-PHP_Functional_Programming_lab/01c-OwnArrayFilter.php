<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 28.09.17
 * Time: 08:49
 */
$animals = [
    [ 'name' => 'Waffles', 'type' => 'dog','age' => 12],
    [ 'name'=> 'Fluffy', 'type' => 'cat','age' => 14],
    [ 'name'=> 'Spelunky', 'type' => 'dog','age' => 4],
    [ 'name' => 'Hank', 'type' => 'dog','age' => 11],
];

$filter = function($arr, $callback){
    $result = [];
    foreach ($arr as $names){
            if ($callback ($names) == true) {
                $result[] = $names;
            }
    }return $result;
};

$youngDog = function($animals){
    if ($animals['type'] == 'dog' && $animals['age'] < 8) {
        return true;
    } else {
        return false;
    }
};

$dogOutput = $filter($animals, $youngDog);

print_r($dogOutput);

