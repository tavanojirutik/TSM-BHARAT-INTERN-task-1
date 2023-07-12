<?php
    
    include('includes/connection.php');
    if(isset($_POST['userregister'])){
        $query = "insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile])";
        $run = mysqli_query($connection,$query);
        if($run){
            echo "<script type = 'text/javascript'> 
            alert('admin Login Successfully...');
            window.location.href = 'index.php';
            </script>";
        }else{
            echo "<script type = 'text/javascript'> 
            alert('Errror Occured...');
            window.location.href = 'register.php';
            </script> "; 
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Registration Page</title>
    <!-- jquery file -->
    <script src="includes/code.jquery.com_jquery-3.7.0.js"></script>
    <!-- bootstrap file  -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
    <!-- External CSS file  -->
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    
    

</head>
<body>
    <div class="row" >
        <div class="col-md-3 m-auto" id="register_page">
            <center><h3 style="color : white " id="u1">User Registration</h3></center>
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                </div>

                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email " required>
                </div>

                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
                </div>

                <div class="form-group">
                    <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" required>
                </div>



                <div class="form-group">
                    <center><input type="Submit" name="userregister" value="Register" class="btn btn-warning" id="b1"></center><br>
                    <center><a href="index.php" class="btn btn-danger">Go To Home</a></center>
                    
                </div>

            </form>
            <!-- <center><a href="home.php" class="btn btn-danger">Home</a></center> -->
        </div>
    </div>
    
</body>
</html>