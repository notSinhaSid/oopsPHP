<?php

// require('dbconnection.inc.php');

$sql="SELECT * FROM student_demo;";

$result = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_result($result, $Id, $sName, $sRoll, $sCity);

mysqli_stmt_execute($result);

mysqli_stmt_store_result($result);

if(mysqli_stmt_num_rows($result)>0)
{
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Id</th>';
    echo '<th>Name</th>';
    echo '<th>Roll</th>';
    echo '<th>City</th>';
    echo '<th>Delete</th>';
    echo '<th>Update</th>';
    echo '</tr>';
    echo '<tbody>';
    while(mysqli_stmt_fetch($result))
    {
        echo '<tr>';
        echo '<td>'.$Id.'</td>';
        echo '<td>'.$sName.'</td>';
        echo '<td>'.$sRoll.'</td>';
        echo '<td>'.$sCity.'</td>';
        echo '<td><form action="" method="POST">
                <input type="hidden" name="Id" value="'.$Id.'">
                <button class="btn btn-sm btn-danger" name="delete" type="submit"><i class="fa-sharp fa-solid fa-trash"></i></button>
                </form></td>';

        echo '<td><form action="" method="POST">
                <input type="hidden" name="Id" value="'.$Id.'">
                <button class="btn btn-sm btn-warning" name="edit" type="submit"><i class="fa-solid fa-pen"></i></button>
                </form></td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</thead>';
    echo '</table>';
}
else{
    echo "Nothing to share";
}

mysqli_stmt_close($result);
?>