<?php
session_start();

$_SESSION['username']="Splitzer";
$_SESSION['value']="session tut";
$_SESSION['time']=time()+3600;


if(isset($_SESSION['username']))
{
    echo $_SESSION['username'];
    echo $_SESSION['time'];

}

session_unset();
// echo $_SESSION['username'];
session_destroy();


echo $_SESSION['username'];
?>