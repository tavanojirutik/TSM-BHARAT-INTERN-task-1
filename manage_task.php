<?php
    
    include('../includes/connection.php');
   
?>
<html >
<head>
</head>
<body>
    <center><h3>All Assigned Tasks</h3></center>
   
        <table class="table" style="background-color: rgb(60, 17, 17); color: rgba(255, 255, 255, 0.986);">
            <tr>
                <td>S.No</td>
                <td>Task ID</td>
                <td>Description</td>
                <td>Start Date</td>
                <td>End Date</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
        
        <?php
        $sno=1;
        $query = "select * from tasks";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            ?>
           
            <tr>
            <td><?php echo $sno; ?></td>
            <td><?php echo $row['tid']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['start_date']; ?></td>
            <td><?php echo $row['end_date']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><a href="edit_task.php?id=<?php echo $row['tid']; ?>">Edit</a> | <a href="delete_task.php?id=<?php echo $row['tid']; ?>">Delete</a></td>
            </tr>
            <?php
            $sno=$sno+1;
        }
        ?>
    </table>
</body>
</html>