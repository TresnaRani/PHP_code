<?php

    $conn = mysqli_connect('localhost','root','','testdb');

    if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];



        $image = $_FILES['image']['name'];
        $tmpName = $_FILES['image']['tmp_name'];
        $uploc   = 'images/'.$image;

        $sql = "INSERT INTO student(firstName,lastName,email,image)
                    VALUES('$firstName','$lastName','$email','$image')";

                    if(mysqli_query($conn,$sql) == TRUE){
                        move_uploaded_file($tmpName,$uploc);
                        echo "DATA INSERTED";
                    }
                    else{
                        echo "data not inserted";
                    }
    }



?>

<html>

    <head>
        <style>
            .img{width:50px;height:auto}
            </style>
    </head>
<body>
            
        <form action = "<?php echo $_SERVER['PHP_SELF']?>" method = "POST" enctype ="multipart/form-data">

        FirstName :<br>
        <input type = "text" name = "firstName" ><br><br>

        LastName :<br>
        <input type = "text" name = "lastName" ><br><br>
        Email :<br>
        <input type = "email" name = "email" ><br><br>
        Image :<br>
        <input type = "file" name = "image" ><br><br>
        <input type = "submit" name = "submit" value = "Insert">
        </form>




<?php

    $sql = "SELECT *FROM student ORDER BY id DESC LIMIT 3" ;
    $data = mysqli_query($conn,$sql);
    
    echo"<table border =1><tr></tr>";

   while($row = mysqli_fetch_assoc($data)){

    
    
    $firstName = $row['firstName'];
    $lastName = $row['lastName'];
    $email = $row['email'];
     $image = $row['image'];

     
     echo" <tr><td>$firstName</td>
                <td>$lastName</td>
                <td>$email</td>";
   
                echo"<td><img src = 'images/$image' class = 'img'></img></td></tr>";
   }
    ?>
   
    </table>
    </body>

</html>

    


