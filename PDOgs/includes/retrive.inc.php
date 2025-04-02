<?php

// include('database.inc.php');

$sql = "SELECT * FROM student_demo";
$result=$conn->query($sql);


// rowCount instead of mysqli_num_rows() function 
// if($result->rowCount()>0){
//     while($row=$result->fetch(PDO::FETCH_ASSOC))
//     {
//         echo 'ID :'.$row['Id'].'<br>';
//         echo 'Name :'.$row['sName'].'<br>';
//         echo 'Roll :'.$row['sRoll'].'<br>';
//         echo 'Place :'.$row['sCity'].'<br>';
//         echo "<br>";
//     }
// }
// else{
//     echo "0 Data";
// }
//  number of affected in the table


 // retrive both in indexed and asscoiiative array format
// $row2=$result->fetch(PDO::FETCH_BOTH);  // retrive both in indexed and asscoiiative array format
// $row3=$result->fetch(PDO::FETCH_);// retrive both in indexed and asscoiiative array format
// by default in PDO:: fetch_both

foreach($result->fetchAll(PDO::FETCH_ASSOC) as $row)
{
    echo '<pre>';
    print_r($row);
    echo '</pre>';
}

// why use fetchAll(PDO::FETCH_ASSOC) since in normal fetch the fetching is done only on the first row of the database and the rest ane not returned
//  we use fetch with use of while loop to loop over each element but in foreach such is not done , hence fetchAll is used