<?php
// setCookie("cookie-name","This is value of cookie");
setcookie("cookie2","with expiry", time()+60*60*24*1);
setcookie("cookie2","anime cookie", time()+60*60*24*1);
// this is replacing the cookie where the cookie name is same

setcookie("cookie3","not with expiry", time()+60*60*15*1);
// here a  new cookie is appended in the browser

setcookie("cookie3","delete", time()-3600);
// other parameters include the path where the cookie are set , name of the domain
// what is the priority of the cookie that is stored
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>This is cookie learning</h3>

    <?php
        echo $_COOKIE['cookie2'];
    ?>
</body>
</html>