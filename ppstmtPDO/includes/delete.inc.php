<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['delete']))
{
    $sql ="DELETE FROM student_demo WHERE Id = :Id";

    $result =$conn->prepare($sql);

    if($result)
    {
        $result->bindParam(':Id', $Id);

        $Id = $_POST['Id'];

        $result->execute();

        echo '<script>location.href="./index.php"</script>';
    }

    unset($result);
}
?>