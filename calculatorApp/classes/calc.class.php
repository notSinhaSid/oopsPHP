<?php


class Calc
{
    public $operator;
    public $operand1;
    public $operand2;


    public function __construct(string $operator, int $operand1, int $operand2)
    {
        $this->operand1 = $operand1;
        $this->operator = $operator;
        $this->operand2 = $operand2;
    }

    public function calculate()
    {
        switch ($this->operator) 
        {
            case 'add':
                $result= $this->operand1 + $this->operand2;
                return $result;
                break;
            case 'sub':
                $result= $this->operand1 - $this->operand2;
                return $result;
                break;
            case 'mul':
                $result= $this->operand1 * $this->operand2;
                return $result;
                break;
            case 'div':
                $result= $this->operand1 / $this->operand2;
                return $result;
                break;
            default:
                echo "Wrong operations";
                break;
        }
    }

}