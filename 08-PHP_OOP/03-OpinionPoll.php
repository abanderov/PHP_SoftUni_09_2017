<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 02.10.17
 * Time: 08:51
 */

class Person {
    private $name;
    private $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getName($name){
        return $this->name;
    }

    public function getAge($age){
        return $this->age;
    }
}
$ppl = [];
$result = [];
$countNum = trim(fgets(STDIN));
for($i=0; $i<$countNum; $i++){
    $input = trim(fgets(STDIN));
    $data = explode(' ', $input);
    $ppl [] = new Person($data[0], $data[1]);
}
foreach ($ppl as $person){
    $name = $person->getName($person);
    $age = $person->getAge($person);
    if ($age > 30){
//        $result []= $name. ' - '.$age."\n";
        $result[$name] = $age;
    }
}
ksort($result);
foreach ($result as $key=>$value){
    echo $key.' - '.$value."\n";
}

