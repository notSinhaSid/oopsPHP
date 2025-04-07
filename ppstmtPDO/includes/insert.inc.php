<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
{
    if(($_POST['sName']=="")||($_POST['sRoll']=="")||($_POST['sCity']==""))
    {
        echo "Fill all fields";
    }
    else
    {
        $sql = "INSERT INTO student_demo(sName, sRoll, sCity) VALUES(:sName,:sRoll,:sCity)";

        $result = $conn->prepare($sql);

        if($result)
        {
            $result->bindParam(':sName', $sName, PDO::PARAM_STR);
            $result->bindParam(':sRoll', $sRoll, PDO::PARAM_INT);
            $result->bindParam(':sCity', $sCity, PDO::PARAM_STR);

            $sName = $_POST['sName'];
            $sRoll = $_POST['sRoll'];
            $sCity = $_POST['sCity'];

            $result->execute();

            echo '<script>location.href="./index.php"</script>';
        }
        unset($result);
    }
}
?>