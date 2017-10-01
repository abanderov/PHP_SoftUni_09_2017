<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 30.09.17
 * Time: 09:21
 */

$room = [
    'kithen'      => ['width'=> 3,'length'=>2, 'height' => 2.4],
    'living_room' => ['width'=> 6,'length'=>4, 'height' => 2.4],
    'bedroom'     => ['width'=> 5,'length'=>3, 'height' => 2.2],
];

$calc = function ($value){
    $result = $value['width'] * $value['length'] * $value['height'];
    return $result;
};

$result = array_map($calc, $room);

print_r($result);