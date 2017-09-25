<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 25.09.17
 * Time: 11:31
 */


$input = $_POST['input'];
$result='';
for($i=0; $i < strlen($input); $i++){
    $char = $input[$i];
    if(ord($char) % 2 == 0 ){
        $result .= "<font color=\"red\"> $char </font>";//red
    }else{
        $result .= "<font color=\"blue\"> $char </font>";//blue
    }

}
?>

<form action="04-ColoringTexts.php" method="POST">
    <div>
        <input type="text" name="input">
    </div>
    Submit:
    <input type="submit" value="Color text">
    </div>
</form>

<p>
<?= $result;?>
</p>

