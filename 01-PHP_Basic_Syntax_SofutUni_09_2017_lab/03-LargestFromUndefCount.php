<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 23.09.17
 * Time: 17:37
 */

$largest = 0;
while($number = intval(fgets(STDIN))){
    $largest = max($largest,$number);
}
echo 'Max:' .  $largest;