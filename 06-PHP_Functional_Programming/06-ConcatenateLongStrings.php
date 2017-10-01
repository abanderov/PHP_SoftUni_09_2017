<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 30.09.17
 * Time: 09:52
 */

$input = ['Hello ', 'there.',
    'This is just another long string,',
    'that would pass the check.',
    'but',
    'this',
    'will',
    'not',
    'pass it.'];

$arrFilt = array_filter(
    $input,
    function($str){
        if(strlen($str) > 20){
            return true;
        }else{
            return false;
        }
    });
$arrFilt = array_values($arrFilt);
$arrCount = count($arrFilt);
//$concatLongStr = function ($n, $arr) use (&$concatLongStr) {
//    $arrFilt = array_filter(
//        $arr,
//        function($str){
//            if(strlen($str) > 20){
//                return true;
//            }else{
//                return false;
//            }
//        });
//    $arrFilt = array_values($arrFilt);
//    $result = $arrFilt[0];
//    if($n == 0){
//        return '0';
//    }else{
//        $result .= 'TEST'. $concatLongStr($n-1,$arr);
//        return $result;
//    }
//};

$concatLongStr = join(' ', $arrFilt);
//print_r($arrFilt);
print_r($concatLongStr);


