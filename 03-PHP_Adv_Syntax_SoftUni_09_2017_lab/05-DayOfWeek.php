<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 25.09.17
 * Time: 09:07
 */

$input = trim(fgets(STDIN));

echo dayOfWeek($input);

function dayOfWeek ($day){
    date_default_timezone_set('UTC');
    $result = date("N", strtotime($day));
    return $result;
}