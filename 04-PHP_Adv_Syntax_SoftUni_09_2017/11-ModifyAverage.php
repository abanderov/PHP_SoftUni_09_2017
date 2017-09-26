<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 26.09.17
 * Time: 16:30
 */

$input = trim(fgets(STDIN));
$number = '';
$numberAppend = 9;
$avrg = 5;
if(preg_match('/^\d{1,6}$/', $input)){
    $data = str_split($input);
    for ($i=0; $i < count($data); $i++){
        $number += intval($data[$i]);
    }
    $check = $number/count($data);
    if($check > $avrg){
        echo intval($input);
    }
    while($check < $avrg){
        $input .= '9';
        $numberAppend = 0;
        $dataAppend = str_split($input);
        for ($i=0; $i < count($dataAppend); $i++){
            $numberAppend += intval($dataAppend[$i]);
        }
        $checkAppend = $numberAppend/count($dataAppend);
        if ($checkAppend > 5){
            $check = $checkAppend;
            echo $input;
            break;
        }
    }
}
