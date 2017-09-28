<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 28.09.17
 * Time: 10:36
 */


$animals = [
    [ 'name' => 'Waffles', 'type' => 'dog','age' => 12],
    [ 'name'=> 'Fluffy', 'type' => 'cat','age' => 14],
    [ 'name'=> 'Spelunky', 'type' => 'dog','age' => 4],
    [ 'name' => 'Hank', 'type' => 'dog','age' => 11],
];
$input = trim(fgets(STDIN));
$wrapper = function($input){
     switch ($input){
        case 'young':
            return function($animals){
                if ($animals['type'] == 'dog' && $animals['age'] < 10) {
                    return true;
                } else {
                    return false;
                }
            };
            break;

        case 'old':
            return function($animals){
                if ($animals['type'] == 'dog' && $animals['age'] > 10) {
                     return true;
                } else {
                    return false;
                }
            };
            break;
    }

}; //switch young || old na bazata na input

$filter = function($arr, $callback){
    $result = [];
    foreach ($arr as $names){
        if ($callback($names) == true) {
            $result[] = $names;
        }
    }return $result;
};

$dogOutput = $filter($animals, $wrapper($input));
                                //^ трябва да е wrapper-a
print_r($dogOutput);