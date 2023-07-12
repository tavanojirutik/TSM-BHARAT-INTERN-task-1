<?php
    include('../includes/connection.php');
    if(isset($_POST['edit_task'])){
        $query = "update tasks set uid = $_POST[id], description='$_POST[description]' , start_date='$_POST[start_date]',
        end_date='$_POST[end_date]' where tid= $_GET[id]";
        $query_run= mysqli_query($connection,$query);
        if($query_run){
            echo "<script type = 'text/javascript'> 
            alert('Task Udated Successfully..!');
            window.location.href = 'admin_dashboard.php';
            </script> "; 
        }
        else{
            echo "<script type = 'text/javascript'> 
            alert('Update Error..!');
            window.location.href = 'admin_dashboard.php';
            </script> "; 
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit File</title>
     <!-- jquery file -->
     <script src="../includes/code.jquery.com_jquery-3.7.0.js"></script>
    <!-- bootstrap file  -->
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
    <!-- External CSS file  -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <!-- Header Code Start  -->
        <div class="row" id="header">
            <div class="col-md-12">
                <h3><i class="fa fa-solid fa-list" style="padding-right:15px;">Task Management System</i></h3>
                <?php
                    $query = "select * from tasks where tid = $_GET[id]";
                    $query_run= mysqli_query($connection,$query);
                    while ($row= mysqli_fetch_assoc($query_run)) {
                         ?>
                
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 m-auto" style="color:black;"><br>
            <h3 style="color: black">Edit The Task</h3>
            <form action="" method="post">
                <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="" required>
                </div>
                
                <div class="form-group">
                <label>Select User</label>
                <select class="form-control" name="id">
                    <option >Select</option>
                    <?php
                        
                        $query1="select uid,name from users";
                        $query_run1= mysqli_query($connection,$query1);

                        if(mysqli_num_rows($query_run1)){
                            while ($row1= mysqli_fetch_assoc($query_run1)) {
                                ?>
                                <option value="<?php echo $row1['uid'] ?>"><?php echo $row1['name'];?></option>
                                <?php
                            }
                        }
                    ?>
                </select>
            </div>
                <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control" id="" cols="50" rows="3" required><?php echo $row['description'];?></textarea>
                </div>

                <div class="from-group">
                <label for="">Start Date</label>
                <input type="date" class="form-control" name="start_date" value="<?php echo $row['start_date'];?>">
                </div>

                <div class="from-group">
                <label for="">End Date</label>
                <input type="date" class="form-control" name="end_date" value="<?php echo $row['end_date'];?>">
                </div><br>
                <input type="Submit" class="btn btn-warning" name="edit_task" value="Update">
                
            </form>
            <?php
                }
            ?>
        </div>
        </div>





</body>
</html>









