<?php
    try
    {
        $sql = "SELECT * FROM student_demo";

        $result = $conn->prepare($sql);

        $result->execute();
    
        $result->bindColumn(1, $Id);
        $result->bindColumn(2, $sName);
        $result->bindColumn(3, $sRoll);
        $result->bindColumn(4, $sCity);

        if($result->rowCount() >0)
        {
            echo '<table class="table table-success table-striped">';
            echo '<thead>';
            echo '<tr class="text-center">';
                echo '<th>ID</th>';
                echo '<th>Name</th>';
                echo '<th>Roll</th>';
                echo '<th>City</th>';
                echo '<th>Delete</th>';
                echo '<th>Update</th>';
            echo '</tr>';
            echo '<tbody>';
            foreach($result->fetchAll(PDO::FETCH_ASSOC) as $row)
            {
                echo '<tr class="text-center">';
                echo '<td>'.$row['Id'].'</td>';
                echo '<td>'.$row['sName'].'</td>';
                echo '<td>'.$row['sRoll'].'</td>';
                echo '<td>'.$row['sCity'].'</td>';

                echo '<td><form action="" method="POST">
                        <input type="hidden" name="Id" value="'.$row['Id'].'">
                        <button class="btn btn-sm btn-danger" name="delete" type="submit"><i class="fa-sharp fa-solid fa-trash"></i></button>
                        </form></td>';

                echo '<td><form action="" method="POST">
                        <input type="hidden" name="Id" value="'.$row['Id'].'">
                        <button class="btn btn-sm btn-warning" name="edit" type="submit"><i class="fa-solid fa-pen"></i></button>
                        </form></td>';
                echo '</tr>';
            }
            echo '</tbody>';
            echo '</thead>';
            echo '</table>';
        }
        else
        {
            echo "No data to show";
        }
        unset($result);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
?>