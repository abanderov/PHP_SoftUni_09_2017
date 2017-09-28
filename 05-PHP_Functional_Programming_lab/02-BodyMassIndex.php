<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 28.09.17
 * Time: 11:31
 */

$people = [
    [ 'name' => 'John' , 'weight' => 69, 'height' => 1.69 ],
    [ 'name' => 'Peter' , 'weight' => 85, 'height' => 1.68 ],
    [ 'name' => 'Ivan' , 'weight' => 75, 'height' => 1.72 ],
    [ 'name' => 'Mitko' , 'weight' => 95, 'height' => 1.70 ]
];

$bmi = function ($person){
        $result = $person['weight'] / pow($person['height'], 2);
        return $result;
//        return true;
};

print_r(array_map($bmi, $people));