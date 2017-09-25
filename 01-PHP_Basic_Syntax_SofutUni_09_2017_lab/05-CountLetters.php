<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 23.09.17
 * Time: 18:15
 */

$inputLine = trim(fgets(STDIN));
$letters = [];

for($i=0; $i < strlen($inputLine); $i++){
    $char = $inputLine[$i];
//    if (ord($char) >= ord('a') && ord($char) < ord('z')){
//        $letters[$char]++;
//    }else{
//        $letters[$char] = 1;
//    }
    if(!array_key_exists($char,$letters)){
        $letters[$char] = 0;
    }
    $letters[$char]++;
}

print_r($letters);