
<?php
$hostName = "localhost";
$userName = "root";
$password = "";

$conn = new mysqli ($hostName, $userName, $password);

if($conn ->connect_error){
    echo $conn->connect_error;
}
else{
    echo "Connected";
}







?>