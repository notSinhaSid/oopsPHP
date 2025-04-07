<?php

$dsn ="mysql:host=localhost; dbname=ppo_db2";
$user="root";
$password="";

// basic method not good

try
{
    $conn = new PDO($dsn, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    // echo $e->getMessage();
}


?>