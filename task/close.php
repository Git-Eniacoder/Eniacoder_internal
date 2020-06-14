<?php
include("connection.php");
session_start();
$query = "UPDATE `task_list` SET `task_status`='close' WHERE task_id=".$_GET["id"]."";
if(mysqli_query($conn,$query)){
	header("location:tasklist.php");
}
else{
	echo "<script>alert('unable to close task please contact admin');</script>";
}
 ?>