<?php
    $conn =mysqli_connect('localhost','root','','testdb');

    if($_GET['id']){
       $getid =  $_GET['id'];
       $sql = "SELECT * FROM student WHERE id = $getid";
       $query = mysqli_query($conn,$sql);
       $data = mysqli_fetch_assoc($query);

       $id = $data['id'];
       $FirstName = $data['FirstName'];
       $LastName = $data['LastName'];
       $email = $data['email'];
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
                    <form action = "insertForm.php" method= "POST">

                                <h3>Registration Form</h3>
                                FirstName :<br>
                                <input type ="text" name = "FirstName" value = "<?php echo $FirstName?>"><br><br>
                            
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
