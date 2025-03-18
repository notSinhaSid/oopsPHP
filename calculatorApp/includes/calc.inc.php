<?php

declare(strict_types =1);

include('class-autoload.inc.php');

$operand1 = $_POST['num1'];
$operator = $_POST['operator'];
$operand2 = $_POST['num2'];


$cal = new Calc($operator, (int)$operand1, (int)$operand2);

try 
{
    echo $cal->calculate();
} 
catch (TypeError $e) 
{
    echo "Error : ". $e->getMessage();
}

?>