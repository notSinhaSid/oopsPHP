<?php

include('database.inc.php');

$sql ="SELECT * FROM student_demo";

$result = $conn->query($sql);

if($result->rowCount()>0)
{
    echo '<table class="table table-success table-striped">';
    echo '<thead>';
    echo '<tr>';
        echo '<th>ID</th>';
        echo '<th>Name</th>';
        echo '<th>Roll</th>';
        echo '<th>City</th>';
    echo '</tr>';
    echo '<tbody>';
    foreach($result->fetchAll(PDO::FETCH_ASSOC) as $row)
    {
        echo '<tr>';
        echo '<td>'.$row['Id'].'</td>';
        echo '<td>'.$row['sName'].'</td>';
        echo '<td>'.$row['sRoll'].'</td>';
        echo '<td>'.$row['sCity'].'</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</thead>';
    echo '</table>';
}
else{
    echo "There is no data to show!!";
}