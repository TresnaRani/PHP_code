<?php
 if (isset($_POST['submit'])){
   $total = count($_FILES['file']['name']);

   for($x=0;$x<$total;$x++){
    $fileName =  $_FILES['file']['name'][$x];
     $tempName =  $_FILES['file']['tmp_name'][$x];


     $uploc = 'images/'.$fileName;

     move_uploaded_file($tempName,$uploc);
      
 }
}

?>
<form action= "multipleFile.php" method = "POST" enctype = "multipart/form-data">
    Select File<br><br>
    <input type= "file" name = "file[]" multiple><br><br>
    <input type= "submit" name = "submit" value = "Upload"><br><br>
</form>