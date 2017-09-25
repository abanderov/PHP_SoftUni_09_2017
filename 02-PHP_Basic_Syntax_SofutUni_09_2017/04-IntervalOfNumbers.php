<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 20.09.17
 * Time: 09:12
 */
if($_POST['num1'] > 100 || $_POST['num2'] > 100){
    echo"On of the numbers is larger than 100";
} elseif ($_POST['num1'] == $_POST['num2'] ){
    echo "The numbers are equal";
} else{
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $larger = 0;
    $smaller = 0;
    $result = array();
    $count = 0;

    if ($b > $a){
        $larger = $b;
        $smaller = $a;
    } else {
        $larger = $a;
        $smaller = $b;
    }

    $count = $larger - $smaller;

    for($i=$smaller; $i <= $larger; $i++){
        $result[] = $i;
    }
    foreach ($result as $value){
        echo "$value </br>";
    }
}
?>

<form action="04-IntervalOfNumbers.php" method="POST">
    <input type="number" name="num1">
    <br/>
    <input type="number" name="num2">
    <br/>
    <input type="submit" value="Submit">
</form>

