<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 29.09.17
 * Time: 15:50
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
};
$bmiCalcAvg = function ($arr){
    $arrSum = array_sum($arr);
    $result = $arrSum /count($arr);
    return $result;
};

$bmiArr = array_map($bmi, $people);

$bmiAvg = $bmiCalcAvg($bmiArr);
//$bmiAvg = array_reduce($bmiArr, $bmiCalcAvg($bmiArr));
// не мога да намеря начин да го направя с array_reduce...
// решил съм задачата по начина на функционалното програмиране, т.е. без цикли и си дава резултат.

print_r($bmiAvg);

