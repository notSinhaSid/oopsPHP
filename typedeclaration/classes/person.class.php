<?php

class Person
{
    public $name;
    public $eyeColor;
    public $age;


    /* 
    by using type declarations, we can throw an error if wrong type of is given!
    it works with:
        - classes/interfaces names
        - self (used to refernce to same class)
        - arrays
        - callables
        - bool
        - floats
        - int
        - string
        - iterables
        - objects
    */

    public function setName(string $newName)
    {
        $this->name = $newName;
    }

    public function getName()
    {
        return $this->name;
    }
}