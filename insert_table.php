<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'testdb';

$conn = mysqli_connect( $hostname,$username,$password, $dbname);

if(!$conn){
    echo die(mysqli_connect_error());
}

$sql = "INSERT INTO student (firstName,lastName,email)
        VALUES('Trea','Ra','trr@gmail.com')";

        if(mysqli_query($conn,$sql)){
            echo "insert data successfully";
        }
        else{
            echo $sql.''.musqli_error($conn);
        }




$conn->close();

?>