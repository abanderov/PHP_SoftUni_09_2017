<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 25.09.17
 * Time: 12:34
 */

$shopInventory = [];
while($input = trim(fgets(STDIN))) {
    // do stock

    $data = explode(' ', $input);
    $shopInventory[$data[1]] = $data[2];

    if($input == 'shopping time'){
       break; // do buy (stock - buy quant)
    }elseif($input == 'exam time'){
        break;
    }
}
array_count_values($shopInventory);
print_r($shopInventory);
