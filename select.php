
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
    echo "OK";

}
else{
    echo $conn->error;
}



$conn->close();

?>