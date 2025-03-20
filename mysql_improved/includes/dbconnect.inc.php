<?php

// create a conncction with database
$host ="localhost";
$user ="root";
$password ="";
$database ="ppo_db";


$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn)
{
    // echo mysqli_connect_error($conn);
    die($conn);
}
// else{
//     echo "Connected Successfully";
// }

?>