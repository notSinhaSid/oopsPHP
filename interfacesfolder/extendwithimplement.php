<?php

class Parents
{
    public $eyeColor;
    public $bloodGroup;

    public function surName()
    {
        echo "The surname of your parents are Sinha.<br>";
    }
}


interface GrandParents
{
    const STATUS="Healthy";
    public function placeOfBirth();
}


class Kids extends Parents implements GrandParents

{
    public function placeOfBirth()
    {
        echo "Your place of birth is Noida.";
        echo "<br> your current health status is ". GrandParents::STATUS;
    }
}


$kid1 = new Kids();
$kid1->surName();
$kid1->placeOfBirth();

?>