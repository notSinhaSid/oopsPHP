<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['sRegister']))
{
    if(($_POST['sName']=="")||($_POST['sRoll']=="")||($_POST['sCity']==""))
    {
        $msg= '<div class="alert alert-warning mt-3" role="alert">Fill all Fields</div>';
    }
    else
    {
        $sName=$_POST['sName'];
        $sRoll=$_POST['sRoll'];
        $sCity=$_POST['sCity'];

        try {
            $sql ="INSERT INTO student_demo(sName, sRoll, sCity)VALUES('$sName', '$sRoll', '$sCity')";
            $affected_rows=$conn->exec($sql);
            $msg= '<div class="alert alert-success mt-3" role="alert">'.$affected_rows.' row(s) affected.</div>';
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
        
    }
}