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
$ages = [];
$names = [];

if (isset($inputNames, $inputAges)){
//    $cleanNames = preg_replace('/[,|&]/', "", $inputNames);
//    $cleanAges = preg_replace('/[,|&]/', "", $inputAges);
    $names = explode($delimiter, $inputNames);
    $ages = explode($delimiter, $inputAges);

}


include 'frontend.php';