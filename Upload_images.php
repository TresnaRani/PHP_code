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