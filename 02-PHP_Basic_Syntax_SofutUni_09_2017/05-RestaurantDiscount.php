<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 20.09.17
 * Time: 11:18
 */

//input
$numberOfPpl = $_POST['num_ppl'];
$desiredPackage = $_POST['package'];

If($numberOfPpl > 120){
    echo "We do not have an appropriate hall.";
}else{
    checkAvailable($numberOfPpl, $desiredPackage);
}

function checkAvailable($num_people, $des_package){
    //space and $$ for it
    $smallHall = 2500;
    $terrace = 5000;
    $greatHall = 7500;
    $capacitySmallHall = 50;
    $capacityTerrace = 100;
    $capacityGreatHall = 120;

    //discount and $$
    $normalDisc = 0.05;
    $goldDisc = 0.10;
    $platinumDisc = 0.15;
    $normalPrice = 500;
    $goldPrice = 750;
    $platinumPrice = 1000;

    $hallPricesSelected = 0;
    $priceDiscountLeftOver = 0;
    $pricePerPerson = 0;
    $totalPrice = 0;
    $priceAfterDiscount = 0;
    $hallName = "";

    if($num_people <= $capacitySmallHall){
        $hallPricesSelected = $smallHall;
        $hallName = "Small Hall";

    }elseif ($num_people > $capacitySmallHall && $num_people <= $capacityTerrace){
        $hallPricesSelected = $terrace;
        $hallName = "Terrace";

    }elseif ($num_people > $capacityTerrace && $num_people <= $capacityGreatHall) {
        $hallPricesSelected = $greatHall;
        $hallName = "Great Hall";
    }

    if($des_package == "Normal"){
        $totalPrice = $hallPricesSelected + $normalPrice;
        $priceDiscountLeftOver = $totalPrice * $normalDisc;
        $pricePerPerson = $priceDiscountLeftOver / $num_people;
    }elseif ($des_package == "Gold"){
        $totalPrice = $hallPricesSelected + $goldPrice;
        $priceDiscountLeftOver = $totalPrice * $goldDisc;
        $priceAfterDiscount = $totalPrice - $priceDiscountLeftOver;
        $pricePerPerson = $priceAfterDiscount / $num_people;
    }elseif ($des_package == "Platinum"){
        $totalPrice = $hallPricesSelected + $platinumPrice;
        $priceDiscountLeftOver = $totalPrice * $platinumDisc;
        $priceAfterDiscount = $totalPrice - $priceDiscountLeftOver;
        $pricePerPerson = $priceAfterDiscount / $num_people;
    }

    echo "We can offer you the $hallName <br/>";
    echo "The price per person is"; echo sprintf(" %0.2f$",$pricePerPerson);
}

?>

<form action="05-RestaurantDiscount.php" method="POST">
    <p>Group size:</p>
    <input type="number" name="num_ppl">
    <br/>
    <p>Package:</p>
    <input type="text" name="package">
    <br/>
    <input type="submit" value="Submit">
</form>
