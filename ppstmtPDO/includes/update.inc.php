<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['update']))
{
    if(($_POST['sName']=="")||($_POST['sRoll']=="")||($_POST['sCity']==""))
    {
        echo "fill all fields";
    }
    else{
        $sql = "UPDATE student_demo SET sName =:sName, sRoll=:sRoll, sCity=:sCity WHERE Id = :Id";

        $result = $conn->prepare($sql);

        if($result)
        {
            $result->bindParam(':sName', $sName, PDO::PARAM_STR);
            $result->bindParam(':sRoll', $sRoll, PDO::PARAM_INT);
            $result->bindParam(':sCity', $sCity, PDO::PARAM_STR);
            $result->bindParam(':Id', $Id, PDO::PARAM_INT);

            $sName= $_POST['sName'];
            $sRoll=$_POST['sRoll'];
            $sCity=$_POST['sCity'];
            $Id = $_POST['Id'];

            $result->execute();

            echo '<script>location.href="./index.php"</script>';
        }

        unset($result);
    }
}
?>