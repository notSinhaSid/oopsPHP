<?php
const DSN ="mysql:host=localhost; dbname=ppo_db2";
const USER ="root";
const PASSWORD="";

try{
    $conn = new PDO(DSN, USER, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo $e->getMessage();
}

?>