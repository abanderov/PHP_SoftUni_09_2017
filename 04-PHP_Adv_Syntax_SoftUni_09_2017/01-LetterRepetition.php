<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 25.09.17
 * Time: 10:08
 */

$inputLine = trim (fgets(STDIN));
$letters = [];

for($i=0; $i < strlen($inputLine); $i++){
    $char = $inputLine[$i];
    if(!array_key_exists($char,$letters)){
        $letters[$char] = 0;
    }
    $letters[$char]++;
}

print_r($letters);