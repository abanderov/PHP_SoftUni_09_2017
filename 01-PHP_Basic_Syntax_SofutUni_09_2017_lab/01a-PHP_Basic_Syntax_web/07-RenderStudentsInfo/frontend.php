<form action="backend.php" method="POST">
    <div>
        Delimiter:
        <select name="delimiter">
            <option value=",">,</option>
            <option value="|">|</option>
            <option value="&">&</option>
        </select>
    </div>
    <div>
        Names:
        <input type="text" name="names">
    </div>
    <div>
        Ages:
        <input type="text" name="ages">
    </div>
    <div>
        Submit:
        <input type="submit" name="filter" value="Submit">
    </div>
</form>

<?php if (isset($names, $ages)): ?>
    <table border="3" cellpadding="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($names); $i++):?>
                <tr>
                    <td><?= $names[$i];?></td>
                    <td><?= $ages[$i]?></td>
                </tr>
            <?php endfor;?>
        </tbody>
    </table>
<?php endif;?>


