<?php
$conn = mysqli_connect('localhost','root','','phpmydb');

    if(isset($_POST['submit'])){
        echo 'OK';
    }
  
/*
$sql =  "SELECT * FROM Users WHERE username = 'Tresna'";
   $query = mysqli_query($conn,$sql);

    if(mysqli_num_rows($query) >0){
        echo 'found';
    }
        else{
            echo 'Invalid Username or Password';
        }
        */


?>

 <form action = "sql_injection.php" method = "POST">

 Username :<br>
 <input type = "text" name = "username"><br><br>

 
 Password :<br>
 <input type = "password" name = "password"><br><br>

 <button type = "submit" name = "submit">Login</button>
    </form>