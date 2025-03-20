<?php
/*
This connection is the creation of database in tradintional way of PP
include ('includes/dbconnect.inc.php');
*/

/*
this db commenction includes creating a databae on the go without using PHPmyadmin
include ('includes/dbconnect2.inc.php');
*/

//this is the connection to database using OOPs to create a object of mysqli class
include('includes/dbconnectoops.inc.php');



/*
        $sql= "SELECT * FROM product_db";
        $result = mysqli_query($conn, $sql);  // return the object for query on the database
        
        if(mysqli_num_rows($result)>0)
        {
            while ($row = mysqli_fetch_assoc($result))
            {
                echo " ".$row['productId'];
                echo " ".$row['productName'];
                echo " ".$row['productPrice'];
                echo " ".$row['productType'];
                echo "<br>";
            }
        }
        else{
            echo "NO RECORDS ARE FOUND";
        }
   */ 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect using MYSQLI</title>
</head>
<body>
    <h3>    This is the second connection to new</h3>
</body>
</html>