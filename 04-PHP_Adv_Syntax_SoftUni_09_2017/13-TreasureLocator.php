<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 27.09.17
 * Time: 09:22
 */

$input = trim(fgets(STDIN));
$data = explode(', ', $input);

for ($i = 0; $i < count($data); $i+=2){
    $x = $data[$i];
    $y = $data[$i+1];

    echo isTreasure ($x, $y);
}


function isTreasure($x, $y){
    //points are as this - 'A' => [x, y]
    if(isInTonga($x, $y) == true){
        return "Tonga \n";
    }
    if(isInCook($x, $y) == true){
        return "Cook \n";
    }
    if(isInTuvalu($x, $y) == true){
        return "Tuvalu \n";
    }
    if(isInTokelau($x, $y) == true){
        return "Tokelau \n";
    }
    if(isInSamoa($x, $y) == true){
        return "Samoa \n";
    }else{
        return "On the bottom of the ocean \n";
    }
}
function isInTonga($x, $y){
    $tonga =[0,8, 2,8,2,6,0,6
//    '/A' => [x1 = 0, y1 = 8],
//    'B' => [x2 = 2, y2 = 8],
//    'C' => [x3 = 2, y3 = 6],
//    'D' => [x4 = 0, y4 = 6]
    ];
    for($i=0; $i<count($tonga); $i +=9){
        $x1 = $tonga[$i];   $x2 = $tonga[$i+2]; $x3 = $tonga[$i+4]; $x4 = $tonga[$i+6];
        $y1 = $tonga[$i+1];   $y2 = $tonga[$i+3]; $y3 = $tonga[$i+5]; $y4 = $tonga[$i+7];
        if($x >= $x1 && $x <= $x2){
            if ($y >= $y3 && $y <= $y2){
                return true;
            }
        }
    }

}
function isInCook ($x, $y){
    $cook =[4,8,9,8,9,7,4,7
//        'A' => [4, 8],
//        'B' => [9, 8],
//        'C' => [9, 7],
//        'D' => [4, 7]
    ];
    for($i=0; $i<count($cook); $i +=9){
        $x1 = $cook[$i];   $x2 = $cook[$i+2]; $x3 = $cook[$i+4]; $x4 = $cook[$i+6];
        $y1 = $cook[$i+1];   $y2 = $cook[$i+3]; $y3 = $cook[$i+5]; $y4 = $cook[$i+7];
        if($x >= $x1 && $x <= $x2){
            if ($y >= $y3 && $y <= $y2){
                return true;
            }
        }
    }

}
function isInTuvalu($x, $y){
    $tuvalu = [1,3,3,3,3,1,1,1
//        'A' => [1, 3],
//        'B' => [3, 3],
//        'C' =>[3, 1],
//        'D' =>[1, 1]
    ];
    for($i=0; $i<count($tuvalu); $i +=9){
        $x1 = $tuvalu[$i];   $x2 = $tuvalu[$i+2]; $x3 = $tuvalu[$i+4]; $x4 = $tuvalu[$i+6];
        $y1 = $tuvalu[$i+1];   $y2 = $tuvalu[$i+3]; $y3 = $tuvalu[$i+5]; $y4 = $tuvalu[$i+7];
        if($x >= $x1 && $x <= $x2){
            if ($y >= $y3 && $y <= $y2){
                return true;
            }
        }
    }
}
function isInTokelau($x, $y){
    $tokelau =[8,1,9,1,9,0,8,0
//        'A' => [8, 1],
//        'B' => [9, 1],
//        'C' => [9, 0],
//        'D' => [8, 0]
    ];
    for($i=0; $i<count($tokelau); $i +=9){
        $x1 = $tokelau[$i];   $x2 = $tokelau[$i+2]; $x3 = $tokelau[$i+4]; $x4 = $tokelau[$i+6];
        $y1 = $tokelau[$i+1];   $y2 = $tokelau[$i+3]; $y3 = $tokelau[$i+5]; $y4 = $tokelau[$i+7];
        if($x >= $x1 && $x <= $x2){
            if ($y >= $y3 && $y <= $y2){
                return true;
            }
        }
    }
}
function isInSamoa($x, $y){
    $samoa = [5,6,7,6,7,3,5,3
//        'A' => [5, 6],
//        'B' => [7, 6],
//        'C' => [7, 3],
//        'D' => [5, 3]
    ];
    for($i=0; $i<count($samoa); $i +=9){
        $x1 = $samoa[$i];   $x2 = $samoa[$i+2]; $x3 = $samoa[$i+4]; $x4 = $samoa[$i+6];
        $y1 = $samoa[$i+1];   $y2 = $samoa[$i+3]; $y3 = $samoa[$i+5]; $y4 = $samoa[$i+7];
        if($x >= $x1 && $x <= $x2){
            if ($y >= $y3 && $y <= $y2){
                return true;
            }
        }
    }
}