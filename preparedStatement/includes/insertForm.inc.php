<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{
    if(($_POST['sName']=="")||($_POST['sRoll']=="")||($_POST['sCity']==""))
    {
        echo "fill all.";
    }
    else{
        $sql = "INSERT INTO student_demo(sName, sRoll, sCity)VALUES(?,?,?)";    // this is anonymous 
        //preparing the statement
        $result =mysqli_prepare($conn, $sql);
        if($result)
        {
            mysqli_stmt_bind_param($result, 'sis', $sName, $sRoll, $sCity);

            $sName=$_POST['sName'];
            $sRoll=$_POST['sRoll'];
            $sCity=$_POST['sCity'];    

            mysqli_stmt_execute($result);

            echo '<script>location.href="./index.php"</script>';
        }
    }
}


?>