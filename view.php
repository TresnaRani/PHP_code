<?php
    $conn =mysqli_connect('localhost','root','','testdb');
    if(isset($_GET['deleteid'])){
        $deleteid = $_GET['deleteid'];

        $sql = "DELETE FROM student WHERE id = $deleteid";
        if(mysqli_query($conn,$sql)== TRUE){
            header('location:view.php');
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
                        
                    <h3 class= "text-center p-2 m-2 bg-success text-white">User's Information</h3>
                    <a href="insertForm.php" class="btn btn-primary " style= "float:right !important"> Add User</a><br><br>
                    <?php
                    $sql = "SELECT * FROM student";
                    $query = mysqli_query($conn,$sql);

                    echo "<table class ='table table-success'>
                           <tr><th>id</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>email</th>
                            <th>Action</th></tr>";
                            
                    $i=1;      


                  while($data = mysqli_fetch_assoc($query)){
                    
                    $id = $data['id'];
                   $firstName =  $data['firstName'];
                   $lastName =  $data['lastName'];
                   $email =  $data['email'];

                   echo "<tr><td>$i</td>
                   <td>$firstName</td>
                   <td>$lastName</td>
                   <td>$email</td>
                   <td>
                   <span class = 'btn btn-success'>
                                <a href = 'Edit.php?id=$id' class = ' text-white text-decoration-none'>Edit</a></span>
                   <span class = 'btn btn-danger'> 
                                 <a href = 'view.php?deleteid=$id' class = ' text-white text-decoration-none'>Delete </a></span></td></tr>";


                    $i++;

                  };

                    ?>

                    </div>
                    <div class = "col-sm-2">
                    </div>
        </div>
        </div>
</body>
</html>
