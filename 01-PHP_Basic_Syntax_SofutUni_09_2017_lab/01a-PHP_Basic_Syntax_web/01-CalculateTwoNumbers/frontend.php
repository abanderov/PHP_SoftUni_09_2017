<form action="backend.php" method="POST">
    <div>
        Operation:
        <select name="operation">
            <option value="sum">Sum</option>
            <option value="subtract">Subtract</option>
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
    <?php if (isset($output)): ?>
        <div>
            Result:
            <input type="text" disabled="disabled" readonly="readonly" value="<?= $output; ?>"/>
        </div>
    <?php endif; ?>
    <div>
        Submit:
        <input type="submit" name="calculate" value="Submit">
    </div>
</form>

