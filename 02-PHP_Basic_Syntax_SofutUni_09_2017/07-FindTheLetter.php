<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 21.09.17
 * Time: 10:08
 */

$input_sentence = $_POST['sentence'];
$input_cond = $_POST['elements'];
//$shattered_sentence = str_split($input_sentence);
$shattered_array = explode(" ", $input_cond);
$find_this_letter = $shattered_array[0];
$in_its_occurrence = $shattered_array[1];
$result = strposX($input_sentence, $find_this_letter, $in_its_occurrence);
//$result = strpos($shattered_sentence, $find_this_letter, $in_its_occurrence);


echo $result;

//print_r($shattered_sentence);
//echo $find_this_letter;
//echo $in_that_position;


function strposX($haystack, $needle, $number){
    if (strpos($haystack, $needle) != false){
        if($number == '1'){
            return strpos($haystack, $needle);
        }elseif($number > '1'){
            return strpos($haystack, $needle, strposX($haystack, $needle, $number - 1) + strlen($needle));
        }elseif (strposX($haystack, $needle, $number - 1) + strlen($needle) < $number){
            echo 'Find the letter yourself!';
        }
    }else{
        echo 'Find the letter yourself!';
    }

}

?>


<form action="07-FindTheLetter.php" method="POST">
    <input type="text" name="sentence">
    <br/>
    <input type="text" name="elements">
    <input type="submit" value="Submit">
</form>
