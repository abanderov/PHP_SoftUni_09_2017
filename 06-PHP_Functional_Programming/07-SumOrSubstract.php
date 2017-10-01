<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 30.09.17
 * Time: 11:02
 */

$arr = [];
$arr [] = [
    0 => 'sum, 12, 156',
    1 => 'subtract, 5, 6',
    2 => 'subtract, 1, 2'
];

$simpleCalc = function ($inputArr){
    $opSum = function ($a, $b){
        return $sum = $a+$b;
    };

    $opSubtract = function ($a, $b){
    return $sum = $a-$b;
    };
    $resultArr =[];
    foreach ($inputArr as $key => $value){
        foreach ($value as $str => $text) {
            $op = explode(', ', $text);
            $result = ' ';
            $resultArr = [];
            if($op[1] <= 100 || $op[2] <= 100) {
                switch ($op[0]) {
                    case 'sum':
                        $result = $opSum($op[1], $op[2]); //echo "sum";//$opSum;
                        // echo $result;
                        break;
                    case 'subtract':
                        $result = $opSubtract($op[1], $op[2]); //echo "sum";
                        // echo $result;
                        //echo "subtr"; //$opSubtract;
                        break;
                }
                $resultArr = $result . ', ';
                print_r($resultArr);
            }else {
                echo 'error';
            }
        }
    }
};

print_r($simpleCalc($arr));

