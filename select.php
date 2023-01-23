
<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dbName = "phpmydb";

$conn = new mysqli ($hostName, $userName, $password, $dbName);

if($conn->connect_error){
    echo $conn->connect_error;
}

$sql = "SELECT * FROM student";

$result = $conn->query($sql);


if($result->num_rows>0){
    //$row= $result ->fetch_assoc();
  // print_r($row);
    while($row= $result ->fetch_assoc()){
          
        echo $row ['id'].''. $row['firstName'].''. $row['lastName'].''.
        $row['email'].'<br>'.'<br>';
    }
  //echo $row['firstName'];

}
else{
    echo $conn->error;
}



$conn->close();

?>