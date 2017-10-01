<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 30.09.17
 * Time: 09:28
 */

$input =  'Hello, there! ';
$n = 3;

$repeatString = function($n, $string) use (&$repeatString){
    $result = $string;
    if($n == 0){
        return '';
    }else{
        $result .= $repeatString($n-1, $string);
        return $result;
    }
};
echo $repeatString($n, $input);