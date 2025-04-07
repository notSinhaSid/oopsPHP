<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['update']))
{
    if(($_POST['sName']=="")||($_POST['sRoll']=="")||($_POST['sCity']==""))
    {
        echo "Please Fill all Feilds";
    }
    else
    {
        $sql = "UPDATE student_demo SET sName =?, sRoll=?, sCity=? WHERE Id =?";

        $result= $conn->prepare($sql);

        if($result)
        {
            $result->bind_param('sisi', $sName, $sRoll, $sCity, $Id);

            $sName=$_POST['sName'];
            $sRoll=$_POST['sRoll'];
            $sCity=$_POST['sCity'];
            $Id=$_POST['Id'];

            $result->execute();

            echo '<script>location.href="./index.php"</script>';
        }

        $result->close();
    }
}