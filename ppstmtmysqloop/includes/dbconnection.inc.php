<?php

// creating the database connection using prepared statement

const HOST ="localhost";
const USER= "root";
const PASSWORD ="";
const DBNAME="ppo_db2";

$conn = new mysqli(HOST, USER, PASSWORD, DBNAME);

if($conn->connect_error)
{
    die($conn);
}

?>