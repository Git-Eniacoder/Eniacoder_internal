


<?php
include('connection.php');

if(isset($_POST['submit']))
{
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "img/".$filename;
    move_uploaded_file($tempname,$folder);

  $t = $_POST['pid'];
  $t1 = $_POST['text'];
  
  
  $query = "INSERT INTO bug (id, bug, status,img) 
  VALUES ('$t', '$t1', 'open','$folder')";
  $data= mysqli_query($conn,$query);
} 
?>

