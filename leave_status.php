<?php
    session_start();
    include('includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h3>Your Leave Application Status</h3></center>
    <table class="table" style="background-color: rgb(60, 17, 17);  color: aliceblue;">
        <tr>
            <th>S.No</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Status</th>
        </tr>
        <tr>
            <?php 
            $sno = 1;
                $query ="select * from leaves where uid = $_SESSION[uid]";
                $query_run= mysqli_query($connection,$query);
                while ($row= mysqli_fetch_assoc($query_run)){
                    ?>
                    <tr>
                        <td><?php echo $sno; ?></td>
                        <td><?php echo $row['subject']?></td>
                        <td><?php echo $row['message']?></td>
                        <td><?php echo $row['status']?></td>
                        
                    </tr>
                    <?php
                    $sno = $sno +1;
                }

            ?>
        </tr>
    </table>
</body>
</html>