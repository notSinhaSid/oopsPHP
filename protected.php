<?php

class Employee
{
    public $name;
    public $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;

        $this->describe_employee();
    }

    protected function describe_employee()
    {
        echo "The name of employee is $this->name <br>";
        echo "The salary of $this->name is $this->salary";
    }
}

class Programmer extends Employee
{
    public $lang ="PHP";

    public function __construct($name, $lang, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
        $this->lang = $lang;

        echo $this->describe_employee();
    }
}


$emp1= new Employee("Henry", "5000");
// $emp1->describe_employee();
echo "<br>";
$pro1 = new Programmer("Kavar","RUBY", 8000);

?>