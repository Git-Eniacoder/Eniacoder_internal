<!doctype html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Login Form</title>
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Eniacoder</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Login Page <span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>
<div class="login-form">
<h1 class="text-center">Task Mangement Portal</h1>  
    <form action="index.php" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
       
    </form>
    
</div>
<?php include('footer.php');?>
</body>
</html>                                		
<?php
session_start();
include("connection.php");

if(isset($_POST['submit']))
{
	$em = $_POST['email'];
	$pas = $_POST['password'];

	$query = "SELECT * FROM user_data Where email = '$em'";
	$data= mysqli_query($conn,$query);
	$result = mysqli_fetch_assoc($data);


 if(($result['password'] == $pas) && ($result['email'] == $em))
{
  $_SESSION['email'] =$result['email'];
  header('location:tasklist.php');
}
 else
  {
  echo "<script>alert('Your Email or Password is incorrect')</script>";
  }
}
 ?>

