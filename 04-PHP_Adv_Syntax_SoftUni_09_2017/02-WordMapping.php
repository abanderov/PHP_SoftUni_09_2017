<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 25.09.17
 * Time: 10:11
 */


$input = $_POST['input'];
$cleanInput = preg_replace('/[^a-zA-Z0-9\s]+/', '', $input);
$cleanInput = strtolower($cleanInput);
$cleanInput = explode(' ', $cleanInput);
$counts = array_count_values($cleanInput);
?>

<form action="02-WordMapping.php" method="POST">
    <div>
        <input type="text" name="input">
    </div>
        Submit:
        <input type="submit" value="Count words">
    </div>
</form>

<table border="2" cellpadding="1">
    <tbody>
    <?php foreach($counts as $key => $value):?>
        <tr>
            <td><?= $key;?></td>
            <td><?= $value;?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
