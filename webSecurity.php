<?php
if (isset($_POST['username'])){
    $data = htmlspecialchars($_POST['username']);
    $data = trim($data);
     echo stripcslashes($data);
    //echo $_POST['username'];
}


?>

<form action = "<?php echo $_SERVER ['PHP_SELF'];?>" method = "POST">
UserName :<br>
<input type = "text" name = "username"><br><br>
Password :<br>
<input type = "password" name = "password"><br><br>

<input type = "submit" value = "Submit"><br><br>
</form>