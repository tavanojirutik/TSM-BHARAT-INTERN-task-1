<?php
    session_start();
    include('includes/connection.php');
    if(isset($_POST['userLogin'])){
        $query = "select * from users where email = '$_POST[email]' and password= '$_POST[password]'";
        $query_run = mysqli_query($connection,$query);
        if(mysqli_num_rows($query_run)){
            while($row = mysqli_fetch_assoc($query_run)){
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['uid'] = $row['uid'];
            }
            echo "<script type = 'text/javascript'> 
            window.location.href = 'user_dashboard.php';
            </script>";
        }else{
            echo "<script type = 'text/javascript'> 
            alert('Pleas Enter Correct Login Details..!');
            window.location.href = 'user_login.php';
            </script> "; 
        }
    }
     

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>User Login</title>
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
        <div class="col-md-3 m-auto" id="login_page">
            <center><h3 style="color : white " id="u1">User Login</h3></center>
            <form action="" method="post">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                </div>

                
                
                <div class="form-group">
                    <input type="Password" name="password" class="form-control" placeholder="Enter Your Password" required>
                </div>

                <div class="form-group">
                    <center><input type="Submit" name="userLogin" value="Login" class="btn btn-warning" id="b1">></center><br>
                    <center><a href="index.php" class="btn btn-danger">Go To Home</a></center>
                    
                </div>

            </form>
            <!-- <center><a href="home.php" class="btn btn-danger">Home</a></center> -->
        </div>
    </div>
    
</body>
</html>