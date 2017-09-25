<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 25.09.17
 * Time: 09:15
 */


while(true){
    $input = trim(fgets(STDIN));
    $numbers = array_map('floatval', explode (', ', $input));

    if(trim($input) == ''){
        break;
    }

    for ($i = 0; $i < count($numbers); $i+=3){
        $x = $numbers[$i];
        $y = $numbers[$i+1];
        $z = $numbers[$i+2];

        if (isInside($x, $y, $z)){
            echo 'inside';
        }
        else{
            echo 'outside';
        }
    }
}


function isInside( $x, $y, $z){

    $x1 = 10;    $x2 = 50;
    $y1 = 20;    $y2 = 80;
    $z1 = 15;    $z2 = 50;

    if($x >= $x1 && $x <= $x2){
        if($y >= $y1 && $y <= $y2) {
            if($z >= $z1 && $z <= $z2){
                return true;
            }
        }

    }

    return false;
}