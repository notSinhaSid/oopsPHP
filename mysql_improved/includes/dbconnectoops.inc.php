<?php

const HOST ="localhost";
const USER ="root";
const PASSWORD ="";
const DB_NAME ="ppo_db";
$conn = new mysqli(HOST, USER, PASSWORD, DB_NAME);

if ($conn->connect_error)
{
    die("connection is dead");
    exit();
}

?>