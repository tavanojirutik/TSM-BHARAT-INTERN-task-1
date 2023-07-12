<?php
    include('../includes/connection.php');
?>
<html>
<body>
    <center><h3>All Leave Application</h3></center><br>
    <table class="table" style="background-color: rgb(60, 17, 17); color: aliceblue;">
        <tr>
            <th>S.No</th>
            <th>User</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Status</th>
            <th>Action</th>

        </tr>
        <?php
            $SNO = 1;
            $query = "select * from leaves ";
            $query_run = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($query_run)){
                ?>
                
                <tr>
                    <td><?php echo $SNO; ?></td>
                    <?php 
                        $query1 = "select name from users where uid = $row[uid]";
                        $query_run1 = mysqli_query($connection,$query1);
                        while($row1 = mysqli_fetch_assoc($query_run1)){
                            ?>
                            <td><?php echo $row1['name']; ?></td>
                            <?php
                        }
                    ?>
                            <td><?php echo $row['subject']; ?></td>
                            <td><?php echo $row['message']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td><a href="approve.php?id=<?php echo $row['lid'];?>">Approve</a> | <a href="reject.php?id=<?php echo $row['lid'];?>">Reject</a></td>
                        
                            </tr>
                        <?php
                        $SNO = $SNO +1;
                
            } 
        ?>

    </table>
</body>
</html>