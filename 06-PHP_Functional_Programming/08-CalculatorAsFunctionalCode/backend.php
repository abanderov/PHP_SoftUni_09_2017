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
if (isset($operation)){
    if ($operation == 'sum') {
        $resultAB = $inputA + $inputB;
    } elseif ($operation == 'subtract') {
        $resultAB = $inputA - $inputB;
    } elseif ($operation == 'divide') {
        $resultAB = $inputA / $inputB;
    }elseif ($operation == 'multiply') {
        $resultAB = $inputA * $inputB;
    }else{
        $resultAB = 'Wrong';
    }
}


include 'frontend.php';