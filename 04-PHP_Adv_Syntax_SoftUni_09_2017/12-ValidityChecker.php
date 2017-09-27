<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 26.09.17
 * Time: 17:51
 */

$input = trim(fgets(STDIN));
$data = explode(', ', $input);
$x = 0; $x1 = $data[0]; $x2 = $data[2];
$y = 0; $y1 = $data[1]; $y2 = $data[3];
$delta = 0;
$dTwoPoints = sqrt(pow($x1-$x2, 2)+ pow($y1-$y2, 2));
$dFirstPointsZero = sqrt(pow($x-$x1, 2)+ pow($y-$y1, 2));
$dSecondPointsZero = sqrt(pow($x-$x2, 2)+ pow($y-$y2, 2));
//if (abs(round(f)-f))<delta) to check for float point after sqrt in php

$roundFirst = abs(round($dFirstPointsZero)-$dFirstPointsZero);
$roundSecond = abs(round($dSecondPointsZero)-$dSecondPointsZero);
$roundTwoPoints = abs(round($dTwoPoints)-$dTwoPoints);

if($roundFirst > $delta){
    echo '{'.$x1.','.$y1.'}'.' to '.'{'.$x.','.$y.'}'.' is invalid'."\n";
}else{
    echo '{'.$x1.','.$y1.'}'.' to '.'{'.$x.','.$y.'}'.' is valid'."\n";
}

if($roundSecond > $delta){
    echo '{'.$x2.','.$y2.'}'.' to '.'{'.$x.','.$y.'}'.' is invalid'."\n";
}else{
    echo '{'.$x2.','.$y2.'}'.' to '.'{'.$x.','.$y.'}'.' is valid'."\n";
}

if($roundTwoPoints > $delta){
    echo '{'.$x1.','.$y1.'}'.' to '.'{'.$x2.','.$y2.'}'.' is invalid'."\n";
}else{
    echo '{'.$x1.','.$y1.'}'.' to '.'{'.$x2.','.$y2.'}'.' is valid'."\n";
}

//echo $dFirstPointsZero ."\n";
//echo $dSecondPointsZero ."\n";
//echo $dTwoPoints ."\n";
//
//echo "\n";
//echo $roundFirst ."\n";
//echo $roundSecond ."\n";
//echo $roundTwoPoints ."\n";
//
//echo "\n";

