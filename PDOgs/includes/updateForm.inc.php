<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['sUpdate']))
{
    if(($_POST['sName']=="")||($_POST['sRoll']=="")||($_POST['sCity']==""))
    {
        echo "Fill all fileds";
    }
    else{
        $sName=$_POST['sName'];
        $sRoll=$_POST['sRoll'];
        $sCity=$_POST['sCity'];

        try{
            $update_query="UPDATE student_demo SET sName='$sName', sRoll='$sRoll', sCity='$sCity' WHERE Id ={$_POST['Id']}";
            $conn->exec($update_query);
            echo '<script>location.href="./index.php"</script>';
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}