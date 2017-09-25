<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 20.09.17
 * Time: 08:39
 */

$greet = hello;
$num1 = 15;
$num2 = 1.234;
$a = array (1, 2 ,3);
$obj = (object) [2,3,4];

if (is_numeric($obj)){
    var_dump($obj);
}
else
    echo gettype($obj);


