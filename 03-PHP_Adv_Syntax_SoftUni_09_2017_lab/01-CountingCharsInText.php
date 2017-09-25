<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 24.09.17
 * Time: 20:53
 */

$input = trim(fgets(STDIN));

$letters = [];

for($i=0; $i < strlen($input); $i++){
    $char = $input[$i];
    if(!array_key_exists($char,$letters)){
        $letters[$char] = 0;
    }
    $letters[$char]++;
}

echo my_print_r($letters);

function my_print_r ($x) {
    return str_replace(PHP_EOL, '', print_r($x, TRUE));
}