<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 26.09.17
 * Time: 15:36
 */

$inputNum = intval(trim(fgets(STDIN)));
$inputString = trim(fgets(STDIN));
$operations = explode(', ', $inputString);
$percent = $inputNum * ((100-20) / 100);
$chop = "/2";
$bake = "*3";
$spice = "+1";
$dice = sqrt($inputNum);
$fillet = "* ((100-20) / 100)";

foreach($operations as $operation){
    switch ($operation){
        case "chop":
            $inputNum = eval('return '.$inputNum.$chop.';');
            echo "$inputNum \n";
            break;
        case "bake":
            $inputNum = eval('return '.$inputNum.$bake.';');
            echo "$inputNum \n";
            break;
        case "spice":
            $inputNum = eval('return '.$inputNum.$spice.';');
            echo "$inputNum \n";
            break;
        case "dice":
            $inputNum = eval('return '.$dice.';');
            echo "$inputNum \n";
            break;
        case "fillet":
            $inputNum = eval('return '.$inputNum.$fillet.';');
            echo "$inputNum \n";
            break;
    }
}


//echo $inputNum;