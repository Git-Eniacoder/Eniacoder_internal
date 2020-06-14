<?php
include("connection.php");
session_start();
$query = "SELECT * FROM task_list WHERE task_assign_to='".$_SESSION['email']."' AND task_status='open'";
$data= mysqli_query($conn,$query);
$num = mysqli_num_rows($data);
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <title>Eniacoder</title>
  </head>
  <body>
  <?php include('header.php')?>
  <center>
    <div class="container">
      <h1>All Task</h1>

    </div>
   </center>
<div class="row">
<?php 
while($result = mysqli_fetch_assoc($data))
{
  echo '
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">'.$result["task_name"].'</h5>
        <p class="card-text"><span style="font-weight:bold">Description:</span>'.$result["task_description"].'</p>
		<p class="card-text"><span style="font-weight:bold">Deadine:</span>'.$result["task_deadline"].'</p>
		<a href="close.php?id='.$result["task_id"].'" class="btn btn-primary">close task</a>
      </div>
    </div>
  </div>';
}
?>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include('footer.php');?>
  </body>
</html>
