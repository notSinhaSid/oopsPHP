<?php

// creating a new class

class Player
{
    // properties
    public $name;
    var $game_title;
    public $speed=5;

    public $running=FALSE;


    function set_Name($name)
    {
        $this->name = $name;  // this is refrencer
        
    }

    function get_Name()
    {
        return $this->name;
    }

    function run()
    {
        $this->running=TRUE;

        return $this->running;
        // echo $this->name.' is running';
    }

    function stopRun(){
        $this->running=FALSE;
    }

}

echo "This is the first codo for OOPs from code with Harry";

$player1= new Player();
$player1->set_Name("Siddhartha");
echo '<br> The name of Player is  : '.$player1->get_Name();

$player2= new Player();
$player2->set_Name("Sayan");
echo '<br> The name of Player is  : '.$player2->get_Name();

$player3= new Player();
$player3->set_Name("Saif");
echo '<br> The name of Player is  : '.$player3->get_Name();

$isRunning=$player3->run();

if($isRunning)
{
    echo "<br><h3>The player is currently running</h3>";
}

?>