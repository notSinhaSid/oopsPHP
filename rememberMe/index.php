<?php

include('dbconnection.inc.php');

include('signup.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Remember Me demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>
    <h1>Remember Me implementation!</h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <form action="" method="POST" class="form-group">
                    <h4><span>This is a simple registeration form</span></h4>
                    <label for="regName" class="form-label">Name</label>
                    <input type="text" name="regName" id="" class="form-control">

                    <label for="regEmail">Email</label>
                    <input type="email" name="regEmail" id="" class="form-control">

                    <label for="regPass">Create a Password</label>
                    <input type="password" name="regPass" id="" class="form-control">

                    <label for="confirmPass">Retype Password</label>
                    <input type="password" name="confPass" id="" class="form-control">
                    
                    <input type="checkbox" name="remember" id="checkme" class="form-check-input mt-3">
                    <label for="checkme" class="form-check-label mt-3">Remember Me</label><br>
                    <button type="submit" class="btn btn-sm btn-primary mt-3" name= "register">Register</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>