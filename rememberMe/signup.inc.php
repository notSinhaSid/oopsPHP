<?php
session_start();

if(!isset($_SESSION['isLogin']))
{
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
                        $rem = $_POST['remember'];
                        
                        $_SESSION['user']=$regEmail;
                        $_SESSION['isLogin']=TRUE;

                        $cookieRem = 'remember_set';

                        $cookieName ='reguser';
                        $cookieValue =$regName;

                        $cookieTime= time()+60*60*24*1;

                        //this cookie is for the name of the user
                        setcookie($cookieName, $cookieValue, $cookieTime,'/');
                        //the below cookie is for remember me option to be selected
                        setcookie($cookieRem, $rem, $cookieTime,'/');

                        $result->execute();

                        // echo '<script>location.href="dashboard.inc.php"</script>';
                        header('Location: dashboard.inc.php');
                    }
                    else{
                        $result->execute();
                        // echo '<script>location.href="dashboard.inc.php"</script>';
                        header('Location: dashboard.inc.php');
                    }
                }
                else{
                    echo "Password are not same. Try again";
                }
            }
        }
    }
}
else
{
    echo '<script>location.href="dashboard.inc.php"<script>';
}
