<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['edit']))
{

    // $Id = $_POST['Id'];
    try
    {
        $edit_sql = "SELECT * FROM student_demo WHERE Id ={$_POST['Id']}";
        $result = $conn->query($edit_sql);
        $row=$result->fetch(PDO::FETCH_ASSOC);
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
    
}