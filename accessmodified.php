<?php

// access modifiers

class Employee
{
    var $name ="Splitzer";
    public $age =24;

    protected $email="sidsplitzer33.28@gmail.com";
    private $phone_number = 8586916153;


    // function __construct()
    // {
    //     echo $this->name;
    //     echo $this->age;
    //     echo $this->email;
    //     echo $this->phone_number;
    // }

    function showDetails()
    {
        echo "<br>The email of employee is : $this->email";
    }
}


$emp1 = new Employee();
echo $emp1->name;
// echo $emp1->email;  
$emp1->showDetails();
echo "<br> ".$emp1->age;
// echo $emp1->phone_number;

?>