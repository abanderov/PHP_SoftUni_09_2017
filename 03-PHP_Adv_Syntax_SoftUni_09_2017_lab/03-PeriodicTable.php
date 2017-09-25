<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 25.09.17
 * Time: 08:37
 */

$input = trim(fgets(STDIN));
$elements = explode(', ', $input);
$counts = array_count_values($elements);
$result = [];


foreach ($counts as $element => $occurrence) {
    //echo "$element => $occurrence \n";
    if ($occurrence == 1) {
        $result[] = $element;
    }
}

print_r ($result);