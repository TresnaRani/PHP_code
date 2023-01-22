
<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "phpmydb";

$conn = new mysqli ($hostName, $userName, $password, $dbName);

if($conn->connect_error){
    echo $conn->connect_error;
}

  $sql = "CREATE TABLE student (
    
        id INT(6) AUTO_INCREMENT PRIMARY KEY,

        firstName VARCHAR(30),
         lastName VARCHAR(30),
         email VARCHAR(20)
    )";
    
    if($conn->query($sql) == TRUE){
        echo "Table created";

    }
    else{
        echo $conn->error;
    }





$conn->close();

?>