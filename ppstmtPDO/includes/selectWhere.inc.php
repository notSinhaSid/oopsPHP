<?php
$sql = "SELECT sName FROM student_demo WHERE Id =:Id";

$result = $conn->prepare($sql);


    $result->bindValue(':Id', 2);
    // this is for value based binding to the code


    $result->bindValue(':Id', $Id);
    // this is for variable based binding where the value of variable is obtained dynamically
    // $Id =3;
    // $Id = $_POST['Id];    this is the dynamically obtained value

    $result->execute();

    $row = $result->fetch(PDO::FETCH_ASSOC);

    echo $row['sName'];

?>