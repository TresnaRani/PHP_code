<?php

    if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $image = $_FILES['image']['name'];
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