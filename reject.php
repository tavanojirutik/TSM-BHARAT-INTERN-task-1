<?php 
    include('../includes/connection.php');
    $query = "update leaves set status = 'Reject' where lid = $_GET[id]";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
            
        echo "<script type = 'text/javascript'> 
        alert('Leave Status Updated Successfully..!');
        window.location.href = 'admin_dashboard.php';
        </script> "; 
    }
    else{
        echo "<script type = 'text/javascript'> 
        alert('Leave Error..!');
        window.location.href = 'admin_dashboard.php';
        </script> "; 
    }
?>