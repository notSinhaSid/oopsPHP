<?php
include('dbconnection.inc.php');

session_start();

if(isset($_SESSION['isLogin']))
{
    $regEmail = $_SESSION['user'];

    // header('location:dashboard.php');
    

    echo $regEmail;
    // $_COOKIE
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>This is dashboard</h3>
</body>
</html>