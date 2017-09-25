<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 24.09.17
 * Time: 20:21
 */
$inputName = $_POST['name'];
$inputAge = $_POST['age'];
$inputGender =  $_POST['gender'];
$result = 'Me name is '. $inputName .'. I am '. $inputAge .' years old. I am '. $inputGender .'.'
?>

<form action="11-GetFormData.php" method="POST">

    <div>
        Name:
        <input type="text" name="name">
    </div>
    <div>
        Ages:
        <input type="text" name="age">
    </div>
    <div>
        <input type="radio" name="gender" value="male"> Male<br>
        <input type="radio" name="gender" value="female"> Female
    </div>
    <div>
        Submit:
        <input type="submit" name="filter" value="Submit">
    </div>
</form>

<?= $result;?>