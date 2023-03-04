<?php
 if (isset($_POST['submit'])){
    echo "OK";
 }

?>
<form action= "multipleFile.php" method = "POST" enctype = "multipart/form-data">
    Select File<br><br>
    <input type= "file" name = "file[]" multiple><br><br>
    <input type= "submit" name = "submit" value = "Upload"><br><br>
</form>