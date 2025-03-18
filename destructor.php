<?php

class Employee
{
    public $name;
    public $salary;
// desturctor 
    function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }


    function __destruct()
    {
        echo "<br>This is desctructor called for the emp $this->name";
        // destroy the object created at last at first as in LIFO
    }
}


$emp1 = new Employee("Siddhartha", 500);
//  unset() is used to free up the memeory occupied by the object for a class
unset($emp1);

$emp2 = new Employee("Splitzer", 600);




echo "The name of employee 1 is $emp1->name and their salary is $emp1->salary";
echo "<br>The name of employee 2 is $emp2->name and their salary is $emp2->salary";

?>