<?php
include('includes/autoloader.inc.php');
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPL_AUTOLOAD_REGISTER</title>
</head>
<body>
    <h3>THis is for spl_autoload_register() method working </h3>

    <?php
    $second = new Second;

    $second->run_second();
    
    ?>
</body>
</html>