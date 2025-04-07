<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{
    if(($_POST['sName']=="")||($_POST['sRoll']=="")||($_POST['sCity']==""))
    {
        echo "Fill All Fields";
    }
    else
    {
        $sql = "INSERT INTO student_demo(sName, sRoll, sCity)VALUES(?,?,?)";

        $result =$conn->prepare($sql);

        if($result)
        {
            $result->bind_param('sis', $sName, $sRoll, $sCity);

            $sName= $_POST['sName'];
            $sRoll= $_POST['sRoll'];
            $sCity= $_POST['sCity'];

            $result->execute();

            echo '<script>location.href="./index.php"</script>';
        }

        $result->close();
    }
}