<?php

$sql = "SELECT * FROM student_demo";
//prepare
$result = $conn->prepare($sql);
//bind
$result->bind_result($Id, $sName, $sRoll, $sCity);
//execute
$result->execute();
//store
$result->store_result();
// check if there are any row results in database
if($result->num_rows > 0)
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
    echo '</thead>';
    echo '<tbody>';
    // while the query fetches each row do the following
    while($result->fetch())
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
    echo '</table>';
}
else{
    echo "Nothing to share";
}

$result->close();

?>