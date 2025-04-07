<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['edit']))
{
    $sql = "SELECT * FROM student_demo WHERE Id = :Id";

    $result = $conn->prepare($sql);

    if($result)
    {
        $result->bindParam(':Id', $Id);

        $Id = $_POST['Id'];

        $result->execute();

        $row = $result->fetch(PDO::FETCH_ASSOC);
    }

    unset($result);
}
?>