
<?php

$hostName = "localhost";
$userName = "root";
$password = "";

$conn = new mysqli ($hostName, $userName, $password);

if($conn->connect_error){
    echo $conn->connect_error;
}
else{
    echo "Connected";
}



$sql = "create database phpmydb";

if($conn->query($sql) == TRUE){
    echo "DB CReated.";
}
else{
    echo $conn ->error;
}



$conn->close();







?>