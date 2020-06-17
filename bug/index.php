<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title>Eniacoder</title>
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
<!-- NAVBAR -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Eniacoder</a>
    </nav>
  </header>
  

    <div class="login-form">
<h1 class="text-center">BUG-PORTAL</h1>  
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
     



     <?php

      include("connection.php");

      if(isset($_POST['submit']))
      {
      $em = $_POST['email'];
      $pas = $_POST['password'];

        $query = "SELECT * FROM login Where EMAIL = '$em'";
        $data= mysqli_query($conn,$query);
        $result = mysqli_fetch_assoc($data);


      if(($result['Password'] == $pas) && ($result['Email'] == $em))
      {
        session_start();
        $_SESSION['user'] =$result['Email'];
        $_SESSION['id'] =$result['id'];
        header('location:project.php');
      }
      else
        {
        echo "<script>alert('Your Email or Password is incorrect')</script>";
        }
      }
      ?>
 <?php include('footer.php'); ?>
  </body>
</html>
