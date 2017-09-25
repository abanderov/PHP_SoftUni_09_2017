<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 25.09.17
 * Time: 09:01
 */

$input = trim(fgets(STDIN));

echo isPalindrome($input);

function isPalindrome ($text){
    $rev = strrev($text);

    if($rev == $text){
        return "true";
    }else{
        return "false";
    }
}