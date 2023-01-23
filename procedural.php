<?php
$hostname= 'localhost';
$username = 'root';
$password = '';

$conn =mysqli_connect($hostname,$username,$password);

if(!$conn){
    echo die(mysqli_connect_error());
 

}

$sql = "CREATE DATABASE testDB";

if(mysqli_query($conn,$sql)){
    echo "db created";
}
else{
    echo mysqli_error($conn);
}



mysqli_close($conn);




?>