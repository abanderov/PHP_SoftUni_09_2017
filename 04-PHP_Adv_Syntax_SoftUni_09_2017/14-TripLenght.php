<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 27.09.17
 * Time: 11:27
 */

$input = trim(fgets(STDIN));
$data = explode(', ', $input);

$x1 = $data[0]; $x2 = $data[2]; $x3 = $data[4];
$y1 = $data[1]; $y2 = $data[3]; $y3 = $data[5];

$d1 = sqrt(pow($x1-$x2, 2)+ pow($y1-$y2, 2));
$d2 = sqrt(pow($x2-$x3, 2)+ pow($y2-$y3, 2));
$d3 = sqrt(pow($x1-$x3, 2)+ pow($y1-$y3, 2));
if(($d1<=$d3) && ($d3>=$d2)){
    $a = $d1 + $d2;
    echo "1->2->3: $a";
}elseif(($d1<=$d2) && ($d3<$d2)){
    $b = $d3 + $d1;
    echo "2->1->3: $b";
}else{
    $c = $d2 + $d3;
    echo "1->3->2: $c" ;
}

