<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 01.10.17
 * Time: 09:59
 */
?>

<!--<form action="backend.php" method="POST">-->
<!--    <input type = "number" name = "a">-->
<!--    <input type = "number" name = "b">-->
<!--    <select name="operation">-->
<!--        <option value = "sum">+</option>-->
<!--        <option value = "subtract">-</option>-->
<!--        <option value = "multiply">*</option>-->
<!--        <option value = "divide">/</option>-->
<!--    </select>-->
<!--    <input type = "submit" value = "Submit">-->
<!--    <br/>-->
<!--    --><?php //if (isset($result)): ?>
<!--        <div>-->
<!--            Result:-->
<!--            <input type="text" disabled="disabled" readonly="readonly" value="--><?//= $result; ?><!--"/>-->
<!--        </div>-->
<!--    --><?php //endif; ?>
<!--</form>-->

<form action="backend.php" method="POST">
    <div>
        Operation:
        <select name="operation">
            <option value = "sum">+</option>
            <option value = "subtract">-</option>
        </select>
    </div>
    <div>
        Number 1:
        <input type="number" name="num1">
    </div>
    <div>
        Number 2:
        <input type="number" name="num2">
    </div>
    <?php if (isset($resultAB)): ?>
        <div>
            Result:
            <input type="text" disabled="disabled" readonly="readonly" value="<?= $resultAB; ?>"/>
        </div>
    <?php endif; ?>
    <div>
        Submit:
        <input type="submit" name="calculate" value="Submit">
    </div>
</form>
