<?php

class Employee
{
    public $name;
    public $salary;

    // methods for employee

    // this is default constructor
    /*function __construct()
    {
        echo "THis is the first constructor for Employee";
    }    */

    function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

}


$emp1 = new Employee("Siddhartha", 500);
$emp2 = new Employee("Splitzer", 600);


echo "The name of employee 1 is $emp1->name and their salary is $emp1->salary";

?>