 <?php
   
    include('../includes/connection.php');
    if(isset($_POST['create_task'])){
        $query="insert into tasks values(null,$_POST[id],'$_POST[description]','$_POST[start_date]','$_POST[end_date]','Not Started')";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
            
            echo "<script type = 'text/javascript'> 
            alert('Task Created Successfully..!');
            window.location.href = 'admin_dashboard.php';
            </script> "; 
        }
        else{
            echo "<script type = 'text/javascript'> 
            alert('Task Error..!');
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
    <title>Admin Dashboard</title>
    <!-- jquery file -->
    <script src="../includes/code.jquery.com_jquery-3.7.0.js"></script>
    <!-- bootstrap file  -->
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
    <!-- External CSS file  -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- jquaery Code Right hear  -->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#create_task").click(function () {
                $("#right_sidebar").load("create_task.php");
            });
        });
    
        $(document).ready(function () {
            $("#manage_task").click(function () {
                $("#right_sidebar").load("manage_task.php");
            });
        });
        $(document).ready(function () {
            $("#leave_application").click(function () {
                $("#right_sidebar").load("view_leave.php");
            });
        });
    </script>
</head>
<body>
    <!-- Header Code  -->
    <div class="row" id="Header">
        <div class="col-md-12">
            <div class="cal-md-4" style="display : inline-block;">
                <h3>Project Management Tool</h3>
            </div>
            <div class="col-md-6" style="display : inline-block; text-align:right">
                <b>Email: </b> Test@gmail.com
                <span style="margin-left: 20px"><b>Name: </b>Test User</span>
            </div>
        </div>

    </div>
    <!-- header Code End here  -->
    <div class="row">
        <div class="col-md-2" id="left_sidebar">
            <div class="table">
                    <table>
                    <tr  >
                        <td  style="text-align: center;" >
                            <a href="admin_dashboard.php" type="button" id="logout_link">Dashboard</a>
                        </td>
                    </tr>
                    <tr>
                        <td  style="text-align: center;">
                            <a href="#" type="button" id="create_task" class="mid">Create Task</a>
                        </td>
                    </tr>
                    <tr>
                        <td  style="text-align: center;" >
                            <a href="#" type="button" class="mid" id="manage_task">Manage Task</a>
                        </td>
                    </tr>
                    <tr>
                        <td  style="text-align: center;">
                            <a href="#" type="button" class="mid" id="leave_application">Leave Application</a>
                        </td>
                    </tr>
                    <tr >
                        <td style="text-align: center;   color: rgb(215, 22, 22);" >
                            <a href="../logout.php" type="button" id="logout_link">Logout</a>
                        </td>
                    </tr>
</table>
            </div>

        </div>
        <div class="col-md-10" id="right_sidebar">
            <h4>Introduction For Admin</h4>
            <ul style="line-height:3em; font-size:1.2em; List-style-type:none">
                <li>1. All The Employees should mark their attendance daly.</li>
                <li>2. Every one complete the task assigned to them.</li>
                <li>3. Kindly maintain decorum of the office.</li>
                <li>4. keep office and your area neat and clear</li>
            </ul>
        </div>
    </div>



</body>
</html> 