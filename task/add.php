<?php
include("connection.php");
session_start();
echo $_POST['name'];
echo $_POST['des'];
echo $_POST['email'];
echo $_POST['dead'];

$query = "INSERT INTO `task_list`(`task_name`, `task_description`, `task_assign_to`, `task_deadline`, `task_status`) 
		 VALUES ('".$_POST['name']."','".$_POST['des']."','".$_POST['email']."','".$_POST['dead']."','open')";
if(mysqli_query($conn,$query)){
	header("location:tasklist.php");
}
else{
	echo "<script>alert('unable to close task please contact admin');</script>";
}
 ?>