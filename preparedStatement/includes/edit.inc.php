<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['edit']))
{
    $sql ="SELECT * FROM student_demo WHERE Id = ?";

    $result = mysqli_prepare($conn, $sql);

    if($result)
    {
        mysqli_stmt_bind_param($result, 'i', $Id);

        $Id= $_POST['Id'];

        mysqli_stmt_bind_result($result, $Id, $sName, $sRoll, $sCity);

        mysqli_stmt_execute($result);

        mysqli_stmt_fetch($result);


    }
    mysqli_stmt_close($result);
}

?>