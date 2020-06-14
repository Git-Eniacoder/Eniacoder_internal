<?php
$servername = "13.233.17.47";
$username = "subhashish";
$password = "HelloIndia@1";
$dbname = "Bugportal";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
  echo "";
}
else
{
  die("connection failed because ".mysqli_connect_error());
}
 
// $em='a@gmail.com';
//  $sql = "SELECT * FROM login Where Email='$em'";
//  $result =  mysqli_query($conn,$sql);
//  $row = mysqli_fetch_assoc($result); 
//  echo "Email: " . $row["Email"]. " - Name: " . $row["Password"]. "<br>";
  

// $conn->close();
 ?>
