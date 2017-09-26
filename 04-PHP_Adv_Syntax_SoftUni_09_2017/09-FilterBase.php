<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 26.09.17
 * Time: 10:58
 */

$mode = 'reg';
$info = [];
//$stopInput = ['Age', 'Salary', 'Position'];
while($input=trim(fgets(STDIN))) {
    $data = explode(' -> ', $input);
    if ($input == 'filter base') {
        $mode = 'stop reg';
        continue;
    }
    if ($mode == 'reg') {
        //proverka i parse
        if (is_numeric($data[1])) {
            $inputNum = castToNumber($data[1]);
            if (is_float($inputNum)) {
                $info[$data[0]] = floatval($data[1]);;
            } else {
                $info[$data[0]] = intval($data[1]);
            }
        } else {
            $info[$data[0]] = $data[1];
        }
    }
    if ($mode == 'stop reg') {
        switch ($input) {
            case 'Age':
                foreach ($info as $name => $value){
                    if (is_integer($value)){
                        echo "Name: $name \n";
                        echo "Age: $value \n";
                        str_repeat("=", 20);
                        echo "\n";
                    }
                }
                break;
            case 'Position':
                foreach ($info as $name => $value){
                    if (!is_numeric($value)){
                        echo "Name: $name \n";
                        echo "Position: $value \n";
                        echo str_repeat("=", 20);
                        echo "\n";
                    }
                }
                break;
            case 'Salary':
                foreach ($info as $name => $value){
                    if (is_float($value)){
                        echo "Name: $name \n";
                        echo "Salary: $value \n";
                        str_repeat("=", 20);
                        echo "\n";
                    }
                }
                break;
        }
    }
}

function castToNumber($genericStringNumber) {
    return $genericStringNumber+0;
}

