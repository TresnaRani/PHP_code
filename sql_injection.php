<?php
$conn = mysqli_connect('localhost','root','','phpmydb');

   $sql =  "SELECT * FROM Users WHERE username = 'Tresna'";
   $query = mysqli_query($conn,$sql);

    if(mysqli_num_rows($query) >0){
        echo 'found';
    }
        else{
            echo 'Invalid Username or Password';
        }


?>