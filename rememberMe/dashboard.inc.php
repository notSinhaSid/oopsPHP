<?php
include('dbconnection.inc.php');

if(isset($_COOKIE[$cookieName]))
{
    $msg = "Welcome : ".$_COOKIE[$cookieName];
}
else
{
    $msg= "<span>Hello, new user</span>";
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

    <?php
        if(isset($msg))
        {
            echo $msg;
        }
    ?>
</body>
</html>