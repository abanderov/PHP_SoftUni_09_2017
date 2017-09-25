<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 23.09.17
 * Time: 16:34
 */

$operation = trim(fgets(STDIN));
$inputNumberOne = intval(fgets(STDIN));
$inputNumberTwo = intval(fgets(STDIN));
if (isset($operation)){
    if ($operation == 'sum') {
        echo 'The sum is' . ($inputNumberOne + $inputNumberTwo);
    } elseif ($operation == 'substract') {
        echo 'After substraction' . ($inputNumberOne - $inputNumberTwo);
    } else {
        echo 'Wrong';
    }
}


