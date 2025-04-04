<?php

include('database.inc.php');

// example of exec()
// doesn't not works with SELECT query statment since exec() doesn't reutrn any value but returns the number of rows affected

try
{
    $sql= "INSERT INTO student_demo(sName,sRoll,sCity)VALUES('Jatin',105,'Delhi')";
    $affected_rows=$conn->exec($sql);
}
catch (PDOExecption $e)
{
    echo $e->getMessage();
}


