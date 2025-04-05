<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['delete']))
{
    $sql ="DELETE FROM student_demo WHERE Id = ?";

    $result =mysqli_prepare($conn, $sql);

    if($result)
    {
        mysqli_stmt_bind_param($result, 'i', $Id);

        $Id =$_POST['Id'];

        mysqli_stmt_execute($result);
    }
    else
    {
        echo "Failed to delete the data";
    }
    mysqli_stmt_close($result);
}

// mysqli_stmt_close($result);

?>