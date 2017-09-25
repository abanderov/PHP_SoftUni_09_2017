<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 23.09.17
 * Time: 18:29
 */

$inputLine = trim(fgets(STDIN));
$letters = [];

for($i=0; $i < strlen($inputLine); $i++){
    $char = $inputLine[$i];
    if(!array_key_exists($char,$letters)){
        $letters[$char] = 0;
    }
    $letters[$char]++;
}
arsort($letters);
print_r($letters);