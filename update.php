<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "phpmydb";

$conn = new mysqli ($hostName, $userName, $password, $dbName);

if($conn->connect_error){
    echo $conn->connect_error;
}

$sql = "UPDATE student SET firstName = 'kahin',lastName = 'no',
                 email = 'no@gmail.com' WHERE id= 10";
                 
        if($conn->query($sql) == TRUE){
                    echo "Update data ";
                }
                else{
                     echo $conn->error;
                }

                echo "<br>";
                

//$sql = "INSERT INTO student (firstName, lastName, email)

       // VALUES ('Arin', 'ar', 'aresna@gmail.com')";

if($conn->query($sql) == TRUE){
    echo "insert data ";
}
else{
     echo $conn->error;
}





$conn->close();

?>