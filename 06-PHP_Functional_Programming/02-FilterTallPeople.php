<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 29.09.17
 * Time: 17:12
 */

$people = [
    ['name'=> 'John'  , 'height'=> 1.65],
    ['name'=> 'Peter' , 'height'=> 1.85],
    ['name'=> 'Silvia', 'height'=> 1.69],
    ['name'=> 'Martin', 'height'=> 1.82]
];

$result = array_filter($people,
    function($people){
        if ($people['height'] > 1.80) {
            return true;
        } else {
            return false;
        }
    });
print_r($result);