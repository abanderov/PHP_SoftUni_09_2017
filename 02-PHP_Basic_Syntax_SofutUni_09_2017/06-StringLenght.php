<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 21.09.17
 * Time: 09:39
 */

$input_text = $_POST['randomText'];
$check_length = strlen($input_text);
$char = "*";
$char_length = "";
$final_text = "";

if ($check_length > 20){
    $final_text .= substr($input_text, 0, 20);
} else{
    for ($i = $check_length; $i < 20; $i++){
        $char == $i;
        $char_length .= $char;
    }
    $final_text .= $input_text . $char_length;
}

echo $final_text;

?>

<form action="06-StringLenght.php" method="POST">
    <input type="text" name="randomText">
    <br/>
    <input type="submit" value="Submit">
</form>
