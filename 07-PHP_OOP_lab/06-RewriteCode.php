<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 29.09.17
 * Time: 11:09
 */

Class Math{
    private $a;
    private $b;

    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getSumAB(){
        if($this->getCheckIfZeo($this->a, $this->b) == true){
            return $this->a + $this->b;
        } else{
            return 'division by zero makes black holes in the reality!';
        }
    }

    public function getDivAB(){
        if($this->getCheckIfZeo($this->a, $this->b) == true) {
            return $this->a / $this->b;
        }else{
            return 'division by zero makes black holes in the reality!';
        }
    }

    public function getCheckIfZeo($a, $b){
        if(($a==0 && $b==0)) {
            return true;
        }else{
            return false;
        }
    }
}

$nums = new Math(2,0);
$resultSum = $nums->getSumAB($nums);
$resultDiv = $nums->getDivAB($nums);

echo $resultDiv;