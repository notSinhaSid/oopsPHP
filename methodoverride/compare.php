<?php


class Compare
{
    public function ifShown()
    {
        echo "This is basic class";

    }
}

$obj = new Compare();
$obj_2 = new Compare();


if ($obj == $obj_2)
{
    $obj->ifShown();
}

if ($obj === $obj)
{
    // $obj_2->ifShown();
    echo "<br>Note Same of objes";
}