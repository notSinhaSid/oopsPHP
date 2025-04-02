<?php

class Employee
{
    public $name;
    private $salary=20000;
    private $grade='A';

    function showName()
    {
        echo "<br> Name is  : $this->name";
    }

    function setSalary($salary)
    {
        $this->salary = $salary;
    }

    function getSalary()
    {
        echo "<br>".$this->salary;
    }
}

// inheritance 

class Programmer extends Employee{
    private $langauge ="PHP";

    function changeLangauge($langauge)
    {
        $this->langauge = $langauge;
    }

    function show_Langauge()
    {
        echo "<br>This coder know the following langauge : ".$this->langauge;
    }
}


$emp1 = new Employee();
$emp1->name= "Jake";
$emp1->showName();
$emp1->setSalary(45000);
$emp1->getSalary();
// $emp1->show_Langauge();

$emp2 = new Employee();
$emp2->name = "Anthony";
$emp2->showName();
$emp2->setSalary(5000);
$emp2->getSalary();


$coder1 = new Programmer();
$coder1->name ="Seka";
$coder1->changeLangauge("C#");
$coder1->showName();
$coder1->getSalary();
$coder1->show_Langauge();
// echo $coder1->grade;


?>