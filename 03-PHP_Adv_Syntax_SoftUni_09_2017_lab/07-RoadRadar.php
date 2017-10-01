<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 25.09.17
 * Time: 09:40
 */

$speed = intval(fgets(STDIN));
$area = trim(fgets(STDIN));

$limit = getArea($area);
$infraction = getInfraction($speed, $limit);
$overSpeed = $speed - $limit;
if ($infraction == true){
    switch ($overSpeed){
        case $overSpeed <= 20:
            echo 'speeding';
            break;
        case $overSpeed <= 40:
            echo 'excessive speeding';
            break;
        case $overSpeed > 40:
            echo 'reckless driving';
            break;
    }
}else{
    echo ' ';
}

function getArea($area){
    $speedLimit = 0;
    switch ($area){
        case 'motorway':
            $speedLimit = 130;
            break;
        case 'interstate':
            $speedLimit = 90;
            break;
        case 'city':
            $speedLimit = 50;
            break;
        case 'residential':
            $speedLimit = 20;
            break;
    }
    return $speedLimit;
}

function getInfraction ($speed, $limit){
    $overSpeed = $speed - $limit;
    if ($overSpeed <= 0){
        $result = false;
    }else{
        $result = true;
    }
    return $result;
}