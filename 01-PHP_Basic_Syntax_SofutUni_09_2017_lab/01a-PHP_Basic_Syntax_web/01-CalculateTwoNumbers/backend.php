<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 23.09.17
 * Time: 18:42
 */
$operation = $_POST['operation'];
$inputNumberOne = $_POST['num1'];
$inputNumberTwo = $_POST['num2'];
$output= '';
if (isset($operation)){
    if ($operation == 'sum') {
        $output = 'The sum is ' . ($inputNumberOne + $inputNumberTwo);
    } elseif ($operation == 'substract') {
        $output = 'After substraction' . ($inputNumberOne - $inputNumberTwo);
    } else {
        $output = 'Wrong';
    }
}

include 'frontend.php';
