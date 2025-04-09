<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        echo "Your email exists";
    }
    else
    {
        echo "Your email doesn't exists";
    }
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
    <div class="container">
        <div class="row">
            <div class="log-lg-4">
                <form action="" method="POST">
                    <label for="Email">Email</label><br>
                    <input type="email" name="email" id="" placeholder ="Your email">

                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="">

                    <button type="submit" name ="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<?php
$demo = 'user////////gmail....@gmai.com';
if(filter_var($demo, FILTER_VALIDATE_EMAIL)==FALSE)
{
    $clean = filter_var($demo, FILTER_SANITIZE_EMAIL);

}
else{
    echo $clean = $demo;
}

echo $clean;
?>