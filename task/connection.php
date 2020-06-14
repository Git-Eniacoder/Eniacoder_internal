<?php
$servername = "13.233.17.47";
$username = "navneet";
$password = "@Navneet1";
$dbname = "eniacoder_task_management";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
die("connection failed because ".mysqli_connect_error());
}

?>
