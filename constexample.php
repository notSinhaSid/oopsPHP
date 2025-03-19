<?php

// first class

class A
{
    const CONST_VAR= "This is something that can't be changed";

    public static function test()
    {
        $testing = "This is a static method within a class";
        return $testing;
    }
}

// second class

class B extends A
{
    public static $staicVar = "This is a static variable.";

    public static function anotherTest()
    {
        echo parent::CONST_VAR;
        echo "<br>".self::$staicVar;
        $test = "This is testing from class B";
        return $test;
    }
}

$a = A::CONST_VAR;
echo $a."<br>";
$a = A::test();
echo $a."<br>";

$b = B::anotherTest();
echo "<br>".$b;
