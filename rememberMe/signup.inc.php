<?php

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['register']))
{

    if(($_POST['regName']=="")||($_POST['regEmail']=="")||($_POST['regPass']=="")||($_POST['confPass']==""))
    {
        echo "Fill all Fields";
    }
    else{
        $sql = "INSERT INTO userregister_tb(regName, regEmail, regPass)VALUES(:regName, :regEmail, :regPass)";
        $result = $conn->prepare($sql);
        if($result)
        {
            $result->bindParam(':regName', $regName, PDO::PARAM_STR);
            $result->bindParam(':regEmail', $regEmail, PDO::PARAM_STR);
            $result->bindParam(':regPass', $regPass, PDO::PARAM_STR);

            $regName =$_POST['regName'];
            $regEmail=$_POST['regEmail'];
            $regPass=$_POST['regPass'];
            $confPass=$_POST['confPass'];

            if($regPass==$confPass)
            {
                if(isset($_POST['remember']))
                {
                    $cookieName ='reguser';
                    $cookieValue =$regName;
                    $cookieTime= time()+60*60*24*1;

                    setcookie($cookieName, $cookieValue, $cookieTime);

                    $result->execute();

                    echo '<script>location.href="dashboard.inc.php"</script>';
                }
                else{
                    $result->execute();
                    echo '<script>location.href="dashboard.inc.php"</script>';
                }
            }
            else{
                echo "Password are not same. Try again";
            }
        }
    }
}
