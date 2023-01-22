
<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "phpmydb";

$conn = new mysqli ($hostName, $userName, $password, $dbName);

if($conn->connect_error){
    echo $conn->connect_error;
}

$sql = "INSERT INTO student (firstName, lastName, email)

        VALUES ('tresna', 'Rani', 'tresna@gmail.com')";

  
    
    if($conn->query($sql) == TRUE){
        echo "Data Inserted";

    }
    else{
        echo $conn->error;
    }





$conn->close();

?>