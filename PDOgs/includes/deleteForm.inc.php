<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['delete']) && isset($_POST['Id']))
{
    $Id = $_POST['Id'];

    try
    {
        $sql="DELETE FROM student_demo WHERE Id = '".$Id."'";
        $conn->exec($sql);
        echo '<script>location.href="./index.php"</script>';
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
    

}