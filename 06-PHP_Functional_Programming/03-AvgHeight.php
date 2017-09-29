<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 29.09.17
 * Time: 17:15
 */

$people = [
    ['name'=> 'John'  , 'height'=> 1.65],
    ['name'=> 'Peter' , 'height'=> 1.85],
    ['name'=> 'Silvia', 'height'=> 1.69],
    ['name'=> 'Martin', 'height'=> 1.82]
];

function array_average($array) {
    $count = count($array);
    return array_reduce(
        $array,
        function ($carried, $value) use ($count) {
            return ($carried===null?0:$carried) + $value/$count;
        }
    );
}

$averageHeight = array_average(array_column($people,"height"));


print_r($averageHeight);