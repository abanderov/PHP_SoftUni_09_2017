<?php
/**
 * Created by PhpStorm.
 * User: a132
 * Date: 02.10.17
 * Time: 16:49
 */

class Employee{
    private $name;
    private $salary;
    private $position;
    private $department;
    private $email;
    private $age;

    public function __construct($name, $salary, $position, $department, $email, $age)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->position = $position;
        $this->department = $department;
        $this->email = $email;
        $this->age = $age;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setSalary($salary){
        $this->salary = $salary;
    }

    public function setPosition($position){
        $this->position = $position;
    }

    public function setDepartment($department){
        $this->department = $department;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }

    public function getSalary(){
        return $this->salary;
    }

    public function getPosition(){
        return $this->position;
    }

    public function getDepartment(){
        return $this->department;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getAge(){
        return $this->age;
    }
}

$count = trim(fgets(STDIN));
$employees = [];

for($i=0; $i < $count; $i++){
    $input = trim(fgets(STDIN));
    $data = explode(' ', $input);
    $name = $data[0];
    $salary = floatval($data[1]);
    $position = $data[2];
    $department = $data[3];
    $email = 'n/a';
    $age = -1;
    if (count($data) > 4){
        $ageOrEmail = $data[4];
        if (strpos($ageOrEmail, '@') == true ){
            $email = $data[4];
        }else{
            $age = intval($data[4]);
        }
    }
    if (count($data) > 5){
        $age = intval($data[5]);
    }
    $employee = new Employee($name, $salary, $position, $department, $email, $age);
    $employees [] = $employee;
}
$departmentArr = [];
foreach ($employees as $employee){
    $name = $employee->getName($employee);
    $salary = $employee->getSalary($employee);
    $position = $employee->getPosition($employee);
    $department = $employee->getDepartment($employee);
    $email = $employee->getEmail($employee);
    $age = $employee->getAge($age);

    if(!in_array($department, $departmentArr)){
        $departmentArr[$department][] = $name.' '.$salary.' '.$email.' '.$age;
    }
}
$highSalaryArr = [];

foreach($departmentArr as $dep => $employees){
    $salary = [];
    foreach($employees as $employee){
        $dataEmployee = explode(' ', $employee);
        $salary [] = $dataEmployee[1];
    }
    $highSalaryArr[$dep] = array_sum($salary);
}
$highSalaryDep = array_search(max($highSalaryArr), $highSalaryArr);
$printDep = $departmentArr[$highSalaryDep];
//print_r($highSalaryArr);
print_r($highSalaryDep);
sort($printDep, SORT_NUMERIC);
print_r($printDep);
//
//print_r($departmentArr);
