<?php

// creating the database connection using prepared statement

const HOST ="localhost";
const USER= "root";
const PASSWORD ="";
const DBNAME="ppo_db2";

$conn = mysqli_connect(HOST, USER, PASSWORD, DBNAME);

if(!$conn)
{
    echo die(mysqli_connect_error());
}




?>