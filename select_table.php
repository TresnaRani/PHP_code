<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'testdb';

$conn = mysqli_connect( $hostname,$username,$password, $dbname);

if(!$conn){
    echo die(mysqli_connect_error());
}

$sql = "SELECT * FROM student ORDER BY firstName  ASC";

$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result)>0){
    //$row= $result ->fetch_assoc();
  // print_r($row);
    while($data = mysqli_fetch_assoc($result)){
          
        echo $data ['id'].'';
        echo $data['firstName'].'';
        echo $data['lastName'].'';
        echo $data['email'].'<br>'.'<br>';
    }
  //echo $row['firstName'];

}
else{
    echo $conn->error;
}




$conn->close();

?>