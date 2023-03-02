<?php
    $conn =mysqli_connect('localhost','root','','testdb');

    if(isset($_POST['submit'])){
       $FirstName = $_POST['FirstName'];
       $LastName = $_POST['LastName'];
       $email = $_POST['Email'];

       $sql ="INSERT INTO student(firstName,lastName,email) VALUES('$FirstName','$LastName','$email')";
       if(mysqli_query($conn,$sql) == TRUE){
        echo "DATA Inserted";
        header('location:insertForm.php');
       }
       else{
        echo "data not inserted";
       }
}



?>
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <head>
</head>
<body>
    <div class="container">
        <div class= "row ">
            <div class = "col-sm-3">
                    </div>
                    <div class = "col-sm-6 pt-3 mt-3 border border-danger" >
                  
                                <h3>Registration Form</h3>
                                <form action = "insertForm.php" method= "POST">

                                FirstName :<br>
                                <input type ="text" name = "FirstName"><br><br>
                            
                                LastName :<br>
                                <input type ="text" name = "LastName"><br><br>

                                Email :<br>
                                <input type ="email" name = "Email"><br><br>

                                <input type ="submit"  value ="Insert" name = "submit" class = "btn btn-success"><br><br>
</form>

                    </div>
                    <div class = "col-sm-3">
                    </div>
        </div>
        </div>
</body>
</html>
