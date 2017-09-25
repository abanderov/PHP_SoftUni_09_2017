<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 23.09.17
 * Time: 19:06
 */

$delimiter = $_POST['delimiter'];
$inputNames = $_POST['names'];
$inputAges = $_POST['ages'];
//$delimiter = trim(fgets(STDIN));
//$inputNames = trim(fgets(STDIN));
//$inputAges = trim(fgets(STDIN));
$ages = [];
$names = [];
$legalAge = 18;
if (isset($inputNames, $inputAges)){
    $names = explode($delimiter, $inputNames);
    $ages = explode($delimiter, $inputAges);

    for($i=0; $i < count($ages); $i++){
        if ($ages[$i] < $legalAge){
//            array_splice($ages, $i);
//            array_splice($names,$i);
            unset ($ages[$i]);
            unset ($names[$i]);
        }else{
            continue;
        }
    }
    $names = array_values($names);
    $ages = array_values($ages);
}


include 'frontend.php';