<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['update']))
{
    if(($_POST['sName']=="")||($_POST['sRoll']=="")||($_POST['sCity']==""))
    {
        echo "Fill All Feilds";
    }
    else
    {
        $sql = "UPDATE student_demo SET sName=?,sRoll= ?, sCity =? WHERE Id = ?";

        $result=mysqli_prepare($conn, $sql);
        if($result)
        {
            mysqli_stmt_bind_param($result, 'sisi', $sName,$sRoll,$sCity,$Id);

            $sName =$_POST['sName'];
            $sRoll =$_POST['sRoll'];
            $sCity =$_POST['sCity'];
            $Id =$_POST['Id'];

            mysqli_stmt_execute($result);

            echo '<script>location.href="./index.php"</script>';

        }
        mysqli_stmt_close($result);
    }
}

?>