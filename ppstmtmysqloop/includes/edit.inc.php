<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['edit']))
{
    $sql = "SELECT * FROM student_demo WHERE Id =?";

    $result = $conn->prepare($sql);

    if($result)
    {
        $result->bind_param('i', $Id);

        $Id = $_POST['Id'];

        $result->bind_result($Id, $sName, $sRoll, $sCity);

        $result->execute();

        $result->fetch();
    }
    $result->close();
}