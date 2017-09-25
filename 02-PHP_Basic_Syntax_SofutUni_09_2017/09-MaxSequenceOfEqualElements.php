<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 23.09.17
 * Time: 21:53
 */

$input = trim(fgets(STDIN));
$numbers = explode(" ", $input);
//$counts = array_count_values($numbers);
//$max = 0; $num = ' ';
//foreach($counts as $k=>$v){
//    if($v > $max)
//    {
//        $max = $v;
//        $num = $k;
//    }
//
//}
//echo str_repeat($num, $v);

print_r(getSeq($numbers));

function getSeq ($numbers){
    $maxLen = 1;
    $maxIndex = 0;
    $currentLen = 1;
    $currentIndex = 0;
    $longestSeq = [];

    for($i = 1; $i < count($numbers); $i++){
        if($numbers[$i] == $numbers[$i-1]){
            $currentLen++;
        }else{
            $currentIndex = $i;
            $currentLen = 1;
        }
        if($maxLen < $currentLen){
            $maxLen = $currentLen;
            $maxIndex = $currentIndex;
        }
    }
    for ($len = 0; $len <= $maxLen; $len++){
        $longestSeq = $numbers[$maxIndex + $len];
    }
    return $longestSeq;
}




