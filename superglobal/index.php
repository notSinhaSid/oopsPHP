<?php

    echo $_SERVER['DOCUMENT_ROOT']."<br>";
    echo $_SERVER['SERVER_NAME']."<br>";
    echo $_SERVER['SERVER_SOFTWARE']."<br>";
    echo $_SERVER['REQUEST_METHOD']."<br>";
    echo $_SERVER['QUERY_STRING']."<br>";
    echo $_SERVER['REQUEST_TIME']."<br>";
    echo $_SERVER['REQUEST_TIME_FLOAT']."<br>";
    // echo $_SERVER['HTTPS']."<br>";
    echo $_SERVER['REMOTE_ADDR']."<br>";
    echo $_SERVER['PHP_SELF'];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Superglobal demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>SuperGlobal Demo</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
            <form action="" method ="POST">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>