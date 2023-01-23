
<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "phpmydb";

$conn = new mysqli ($hostName, $userName, $password, $dbName);

if($conn->connect_error){
    echo $conn->connect_error;
}

  $sql ="DELETE FROM student WHERE id= 2";

  if($conn->query($sql) == TRUE){
    echo "DELETE DATA";
  }
  else{
      echo $conn->error;
  }



$conn->close();

?>