<?php

class Casino
{
    public function gamesToPlay()
    {
        echo "There are multiple game you can play.<br>";
    }
    final function fees()
    {
        echo "The charges to play the game are show below<br>";
    }
}

class Poker extends Casino
{
    public function gamesToPlay()
    {
        echo "You can Poker<br>";
    }
    
}

class Snooker extends Casino
{
    public function gamesToPlay()
    {
        echo "You can play Snooker<br>";
    }
}


$obj1 = new Casino();
$obj1->gamesToPlay();
$obj1->fees();

$obj2 = new Poker();
$obj2->gamesToPlay();

$obj3 = new Snooker();
$obj3->gamesToPlay();


?>