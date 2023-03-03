<?php
    $conn =mysqli_connect('localhost','root','','testdb');

    

   
if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id = $_POST['id'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['Email'];

       $sql1= "UPDATE student
                SET firstName ='$firstName',lastName='$lastName',email='$email'
                WHERE id ='$id'";

        if(mysqli_query($conn,$sql1)==TRUE){
            header('location:view.php');
            echo "data updated";
        }
        
        else{
            echo $sql1."data not updated";
        }
    }
    else
    {


        if($_GET['id'])
        {
           $getid =  $_GET['id'];
           $sql = "SELECT * FROM student WHERE id =$getid";
           $query = mysqli_query($conn,$sql);
           $data = mysqli_fetch_assoc($query);
    
           $id = $data['id'];
           $firstName = $data['firstName'];
           $lastName = $data['lastName'];
           $email = $data['email'];
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

                                <form action = "<?php echo $_SERVER['PHP_SELF']?>" method= "POST">
                                FirstName :<br>
                                <input type ="text" name = "firstName" value = "<?php echo $firstName?>"><br><br>
                            
                                LastName :<br>
                                <input type ="text" value = "<?php echo $lastName?>" name = "lastName"><br><br>

                                Email :<br>
                                <input type ="email" name = "Email" value = "<?php echo $email?>"><br><br>
                                
                                <input type = "text" name="id" value="<?php echo $id?>" hidden>
                                <input type ="submit"  value ="Update" name = "submit" class = "btn btn-success"><br><br>
</form>

                    </div>
                    <div class = "col-sm-3">
                    </div>
        </div>
        </div>
</body>
</html>
