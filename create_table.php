<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'testdb';

$conn = mysqli_connect( $hostname,$username,$password, $dbname);

if(!$conn){
    echo die(mysqli_connect_error());
}

$sql = "CREATE TABLE student (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(20)
     )";


if(mysqli_query($conn,$sql)){
    echo "db created";
}

else{
    echo mysqli_error($conn);
}




mysqli_close($conn);









?>