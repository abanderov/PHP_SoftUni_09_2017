<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 25.09.17
 * Time: 11:56
 */

$inputCat = $_POST['cat'];
$inputTags = $_POST['tags'];
$inputMonths = $_POST['months'];
$resultCat = '';
$resultTags = '';
$resultMonths = '';

$inputCat = explode(', ', $inputCat);
$inputTags = explode(', ', $inputTags);
$inputMonths = explode(', ', $inputMonths);

for ($i = 0; $i < count($inputCat); $i++){
    $resultCat .= "<li> $inputCat[$i] </li>";
}

for ($i = 0; $i < count($inputTags); $i++){
    $resultTags .= "<li> $inputTags[$i] </li>";
}

for ($i = 0; $i < count($inputMonths); $i++){
    $resultMonths .= "<li> $inputMonths[$i] </li>";
}

?>

<form action="05-NavigationBuilder.php" method="POST">
    <div>Categories:
        <input type="text" name="cat">
    </div>
    <div>
        Tags:
        <input type="text" name="tags">
    </div>
    <div>
        Months:
        <input type="text" name="months">
    </div>
    Submit:
    <input type="submit" value="Generate">
    </div>
</form>

<?php if (isset($inputCat, $inputMonths, $inputTags)): ?>
    <h2>
        Categories
    </h2>
    <ul>
        <?= $resultCat;?>
    </ul>
    <h2>
        Tags
    </h2>
    <ul>
        <?= $resultTags;?>
    </ul>
    <h2>
        Months
    </h2>
    <ul>
        <?= $resultMonths;?>
    </ul>
<?php endif;?>