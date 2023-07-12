<?php
    include('includes/connection.php');
    if(isset($_POST['update'])){
        $query = "update tasks set status = '$_POST[status]' where tid= $_GET[id]";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            echo "<script type = 'text/javascript'> 
            alert('Status Udated Successfully..!');
            window.location.href = 'user_dashboard.php';
            </script> "; 
        }
        else{
            echo "<script type = 'text/javascript'> 
            alert('Status Error..!');
            window.location.href = 'user_dashboard.php';
            </script> "; 
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update_task </title>
     <!-- jquery file -->
     <script src="includes/code.jquery.com_jquery-3.7.0.js"></script>
    <!-- bootstrap file  -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
    <!-- External CSS file  -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!-- Header Code Start  -->
        <div class="row" id="header">
            <div class="col-md-12">
                <h3><i class="fa fa-solid fa-list" style="padding-right:15px;">Task Management System</i></h3>
              
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 m-auto" style="color:black;"><br>
            <h3 style="color: black">Update The Task</h3>
            <?php
                    $query = "select * from tasks where tid = $_GET[id]";
                    $query_run= mysqli_query($connection,$query);
                    while ($row= mysqli_fetch_assoc($query_run)) {
                         ?>  
                <form action="" method="post">
                <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="" required>
                </div>
                
                <div class="form-group">
                <select name="status" class="form-control">
                    <option >-Select-</option>
                    <option >In-Progress</option>
                    <option >Complite</option>
                </select>
            </div>
               
                <input type="Submit" class="btn btn-warning" name="update" value="Update">
                
            </form>
            <?php
                }
            ?>
        </div>
    
</body>
</html>









