<?php
include("database/db_conection.php");
$delete_id=$_GET['active'];
$delete_query="UPDATE `users` SET `is_activated`=1 WHERE id='$delete_id'";
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('viewusers.php?activated=user has been activated','_self')</script>";
}

?>