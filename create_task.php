<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
</head>
<body>
    <h3>Creating Task </h3>
    <div class="row">
        <form action="" method="post">
            <div class="form-group">
                <label>Select User</label>
                <select class="form-control" name="id">
                    <option >Select</option>
                    <?php
                        include('../includes/connection.php');
                        $query="select uid,name from users";
                        $query_run= mysqli_query($connection,$query);

                        if(mysqli_num_rows($query_run)){
                            while ($row= mysqli_fetch_assoc($query_run)) {
                                ?>
                                <option value="<?php echo $row['uid'] ?>"><?php echo $row['name'];?></option>
                                <?php
                            }
                        }
                    ?>

                </select>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control" id="" cols="50" rows="3" placeholder="Mention The task"></textarea>
            </div>
            <div class="from-group">
                <label for="">Start Date</label>
                <input type="date" class="form-control" name="start_date">
            </div>
            <div class="from-group">
                <label for="">End Date</label>
                <input type="date" class="form-control" name="end_date">
            </div><br>
            <input type="Submit" class="btn btn-warning" name="create_task" value="Create Task">
        </form>
    </div>
</body>
</html>