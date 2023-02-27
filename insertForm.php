<?php
    if(isset($_POST['submit'])){
        echo 'ok';
}



?>
<form action = "insertForm.php" method= "POST">
    FirstName :<br>
    <input type ="text" name = "FirstName"><br><br>
   
    LastName :<br>
    <input type ="text" name = "LastName"><br><br>

    Email :<br>
    <input type ="email" name = "Email"><br><br>

    <input type ="submit"  value ="Submit" name = "submit"><br><br>
</form>