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
            <div class = "col-sm-2">
                    </div>
                    <div class = "col-sm-8 pt-3 mt-3 border border-danger" >
                    <?php
                    $sql = "SELECT * FROM student";
                    $query = mysqli_query($conn,$sql);

                    echo "<table class ='table table-success'>
                           <tr><th>id</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>email</th>
                            <th>Action</th></tr>";
                            
                            


                  while($data = mysqli_fetch_assoc($query)){
                    
                    $id = $data['id'];
                   $FirstName =  $data['firstName'];
                   $LastName =  $data['lastName'];
                   $email =  $data['email'];

                   echo "<tr><td>$id</td>
                   <td>$FirstName</td>
                   <td>$LastName</td>
                   <td>$email</td>
                   <td>
                   <span class = 'btn btn-success'>Edit</span>
                   <span class = 'btn btn-danger'> Delete </span></td></tr>";

                  };

                    ?>

                    </div>
                    <div class = "col-sm-2">
                    </div>
        </div>
        </div>
</body>
</html>
