<?php
include_once('dbconnection.inc.php');

$sql ="SELECT * FROM student_demo WHERE Id = ?";

// this is preparing the statement
$result = mysqli_prepare($conn, $sql);

// here bind the parameter
mysqli_stmt_bind_param($result, 'i', $Id);

$Id =3;
//bind the result set 
mysqli_stmt_bind_result($result, $Id, $sName, $sRoll, $sCity);

// execute the prepared statemetn 
mysqli_stmt_execute($result);

while(mysqli_stmt_fetch($result))
{
    echo "ID :". $Id. " ";
    echo "Name :". $sName. " ";
    echo "Roll :". $sRoll. " ";
    echo "City :". $sCity. " ";
    echo "<br>";
}



$sql = "SELECT sName FROM student_demo WHERE Id =?";

$result = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($result, 'i', $Id);

$Id = 3;

mysqli_stmt_bind_result($result, $sName);   // need to mention the name of the vaiable where the data requested should be binded

mysqli_stmt_execute($result);

mysqli_stmt_store_result($result); // first store the result using the following query and then use the num_rows query 

$affected_rows = mysqli_stmt_num_rows($result);

mysqli_stmt_fetch($result);

echo "The name of the candidate is : " . $sName;

echo "<br>The number of rows affected are : ". $affected_rows;

// closing the process

mysqli_stmt_close($result);

mysqli_close($conn);

?>