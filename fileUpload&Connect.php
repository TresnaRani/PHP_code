<?php
$conn = mysqli_connect('localhost','root','','testdb');
if(!$conn){
    echo mysqli_connect_error();
}

if(isset($_POST['submit'])){
   // echo "OK";
  $fileName = $_FILES['upfile']['name'];
  $tmploc   = $_FILES['upfile']['tmp_name'];
  $fileType =  $_FILES['upfile']['type'];
  $fileSize =   $_FILES['upfile']['size'];


  $uploc = "images/".$fileName;

  if($fileSize<200000){
    
  if($fileType =='image/jpeg'){
    if(file_exists($uploc)){
        echo "File alraedy exists";
    }else{
    }

    if(move_uploaded_file($tmploc,$uploc)){
        $sql = "INSERT INTO images(imgName) VALUES('$fileName')";
        if(mysqli_query($conn, $sql)){
            echo "Data inserted";
        }
        else{
            echo "Not inserted";
        }
        echo "Uploaded";
}
else{
     echo "Not uploaded";
}
}else{
    echo "enter select file";
}

  }
  else{
    echo "Size must be less than 200000";
    
  }
  

}
    
 
   

?>
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>"  method = "POST" enctype = "multipart/form-data">

Please select a file<br><br>
<input type = "file" name = "upfile"><br><br>
<input type = "submit" value = "Upload" name ="submit">

</form>