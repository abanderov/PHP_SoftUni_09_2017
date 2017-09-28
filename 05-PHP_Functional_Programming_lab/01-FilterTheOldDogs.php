<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 27.09.17
 * Time: 13:38
 */

$animals = [
[ 'name' => 'Waffles', 'type' => 'dog','age' => 12],
[ 'name'=> 'Fluffy', 'type' => 'cat', 'age' => 14],
[ 'name'=> 'Spelunky', 'type' => 'dog','age' => 4],
[ 'name' => 'Hank', 'type' => 'dog','age' => 11],
];

$result = array_filter(
        $animals,
        function($animals){
            if ($animals['type'] == 'dog' && $animals['age'] > 10) {
                return true;
            } else {
                return false;
            }
        }
);

print_r($result);
