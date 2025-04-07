<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['delete']))
{
    $sql = "DELETE FROM student_demo WHERE Id =?";

    $result=$conn->prepare($sql);

    if($result)
    {
        $result->bind_param('i', $Id);

        $Id = $_POST['Id'];
        
        $result->execute();
    }
    else
    {
        echo "Failed to delete.";
    }
    $result->close();
}