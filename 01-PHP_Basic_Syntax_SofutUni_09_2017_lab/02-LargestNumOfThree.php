<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 23.09.17
 * Time: 16:57
 */
$inputNumberOne = intval(fgets(STDIN));
$inputNumberTwo = intval(fgets(STDIN));
$inputNumberThree = intval(fgets(STDIN));
$largestNumOneTwo = max($inputNumberOne, $inputNumberTwo);
$largest = max ($inputNumberThree, $largestNumOneTwo);

echo "Max" . $largest;

