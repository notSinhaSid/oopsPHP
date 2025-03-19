<?php


include_once ('classes/simpleClass.class.php');

// this is how a regular class works
$obj = new simpleClass();
$obj->helloworld();


// now to create a anonymous class

$newObj = new class()
{
    public function newFunction()
    {
        echo "<br><h1>Accessing the Anonymous class</h1>";
    }
};

$newObj->newFunction();

// Anonymous class are used when we want a class to load only once and also doesn't want to keep them in the memory