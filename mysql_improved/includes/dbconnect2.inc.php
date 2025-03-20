<?php

$host ="localhost";
$user ="root";
$password="";


$conn = mysqli_connect($host, $user, $password);

if(!$conn)
{
    die("Connection Failed");
}

$sql = "CREATE DATABASE ppo_db2";
if(mysqli_query($conn, $sql))
{
    echo "DATABASE created succssfully.";
}
else{
    echo "Failed to create the databaes";
}

?>