<?php

declare (strict_types =1);

include ('includes/class-autoloader.inc.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRICT MODE</title>
</head>
<body>
    <h3>This is STRICT MODE</h3>

    <?php

        $person1 = new Person();

        try
        {
            $person1->setName("Splitzer");
            echo $person1->getName();
        }
        catch (TypeError $e)
        {
            echo "Error ". $e->getMessage();
        }
   ?> 
</body>
</html>