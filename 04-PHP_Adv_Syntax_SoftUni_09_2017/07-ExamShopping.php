<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 25.09.17
 * Time: 12:34
 */

$shoppingInv = [];
while($input = trim(fgets(STDIN))) {
    if($input == 'shopping time'){ continue;}
    if($input == 'exam time'){break;}
    // do stock
    $data = explode(' ', $input);
    $product = $data[1];
    $quantity = intval($data[2]);
    if ($data[0] == 'stock') {
        if (!isset($shoppingInv[$product])) {
            $shoppingInv[$product]= $quantity;
        } else {
            $shoppingInv[$product] += $quantity;
        }
    }elseif ($data[0] == 'buy'){
        if (!isset($shoppingInv[$product])){
            echo "$product does not exist \n";
        }elseif(isset($shoppingInv[$product])){
            $stock = intval($shoppingInv[$product]);
            if($stock == 0){
                echo "$product out of stock \n";
                break;
            }elseif($quantity > $stock){
                $shoppingInv[$product] = 0;
            }else{
                $shoppingInv[$product] -= $quantity;
            }
        }
    }
}
foreach($shoppingInv as $item => $value) {
    if ($value == 0) {
        continue;
    }
    echo "$item -> $value \n";
}









//ksort($shopInventory);
////array_count_values($shopInventory);
//print_r($result);
//    If (!array_key_exists($data[1],$result)){
//        $result[$shopInventory[$data[1]]] += $data[2];
//    }
//    $result[$shopInventory[$data[1]]] = $data[2];
//
//
//    //print_r($shopInventory);
