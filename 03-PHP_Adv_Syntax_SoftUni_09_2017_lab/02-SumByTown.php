<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 25.09.17
 * Time: 08:23
 */

$input = trim(fgets(STDIN));
$data = explode(', ', $input);
$result = [];

for ($i = 0; $i < count($data); $i+=2){
    $town = $data[$i];
    $num = $data[$i+1];
    if(!isset($result[$town])) {
        $result[$town] = 0;
    }
    $result[$town] += + $num;
}

print_r($result);