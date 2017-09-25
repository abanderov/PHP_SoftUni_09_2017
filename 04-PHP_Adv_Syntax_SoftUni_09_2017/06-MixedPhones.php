<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 25.09.17
 * Time: 12:11
 */


while($input = trim(fgets(STDIN))){
    if($input == 'Over'){
        break;
    }
    $data = explode(' : ', $input);
    if(preg_match('/^[0-9]{1,10}$/', $data[0])){
        $t = $data[0];
        $data[0] = $data[1];
        $data[1] = $t;
    }
    unset($t);
    $result[$data[0]] = $data[1];
}
ksort($result);
foreach ($result as $name => $num){
    echo $name. ' -> ' .$num."\n";
}
