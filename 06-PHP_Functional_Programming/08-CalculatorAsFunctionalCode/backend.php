<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 01.10.17
 * Time: 09:59
 */


$inputOperation = $_POST['operation'];
$inputA = $_POST['num1'];
$inputB = $_POST['num2'];
$resultAB = '';

$simpleCalc = function (&$simpleCalc, $num1, $num2, $output = 0, $operation) {
    $opSum = function ($a, $b) {
        return $a + $b;
    };
    $opSubtract = function ($a, $b) {
        return $a - $b;
    };
    if ($operation == 'sum') {
        $output = $opSum($num1, $num2);
        return $simpleCalc ($simpleCalc, $num1, $num2, $output);
    }elseif ($operation == 'subtract') {
        $output = $opSubtract($num1, $num2);
        return $simpleCalc($simpleCalc, $num1, $num2, $output);
    }else{
        return $output;
    }
};
//
$resultAB = $simpleCalc($simpleCalc, $inputA, $inputB, $resultAB, $inputOperation);
print_r($resultAB);


include 'frontend.php';