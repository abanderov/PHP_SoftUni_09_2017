<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 23.09.17
 * Time: 17:45
 */
$largest = 0;
$numbers = [];
while($number = intval(fgets(STDIN))){
    $numbers [] = $number;
    asort($numbers);
    $largest = end($numbers);
}
echo 'Max:' .  $largest;
