<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 25.09.17
 * Time: 10:31
 */
$arr = [];
while($input = trim(fgets(STDIN))){
    if ($input == ''){
        break;
    }
    $numbers = explode (' ', $input);
    for ($i = 0; $i < count($numbers); $i++) {
        $arr[] = $numbers[$i];
    }
}
$counts = array_count_values($arr);
arsort($counts);
foreach ($counts as $k => $v){
    echo $k . ' -> ' .$v ." times \n";
}
