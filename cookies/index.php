<?php

$cookie_name = 'userEmail';

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']) && isset($_POST['rememberMe']))
{
    // to check first if the user want to save their user crediential into the cookie or not 

    $cookie_value = $_POST['userEmail'];
    $cookie_expiry = time()+60*60*24*1;

    setcookie($cookie_name, $cookie_value, $cookie_expiry);

    echo '<script>location.href="index.php"</script>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<style>
    body
    {
        background-color:#a3d590;
    }
</style>
<body>
 <div class="container mt-5">
    <div class="container">
        <form action="" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="userEmail">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="userPassword">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="rememberMe">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
 </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>

<?php
if(isset($_COOKIE[$cookie_name]))
{
    echo "WELCOME user : ". $_COOKIE[$cookie_name];
}
else
{
    echo "Hello Visitor";
}
?>