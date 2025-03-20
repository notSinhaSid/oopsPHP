<?php

        $sql = "SELECT * FROM product_db";

        $result = $conn->query($sql);
        // echo $result->num_rows;

        // $row = $result->fetch_assoc();

        // echo $row['productId'];

        if($result->num_rows >0)
        {
            echo '<div class="container mt-5">';
            {
                // echo $row['productId']."<br>";
                echo '<table class ="table table-dark table-striped-columns" >';
                echo '<thead>';
                echo '<tr class="text-center">';
                echo '<th scope ="col">Product Id</th>';
                echo '<th scope ="col">Product Name</th>';
                echo '<th scope ="col">Product Price</th>';
                echo '<th scope ="col">Product Type</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';
                
                while ($row= $result->fetch_assoc())
                {
                    echo '<tr class ="text-center">';
                    echo "<td>".$row['productId']."</td>";
                    echo "<td>".$row['productName']."</td>";
                    echo "<td>".$row['productPrice']."</td>";
                    echo "<td>".$row['productType']."</td>";
                    echo '</tr>';
                }
                
                echo '</tbody>';
                echo '</table>';
            }
            echo '</div>';
        }
        else{
            echo "No records are available<br>";
        }
    ?>