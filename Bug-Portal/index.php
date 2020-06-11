<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">


    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <title>Eniacoder</title>
  </head>
  <body>



<!-- NAVBAR -->
  <header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-black">
      <a class="navbar-brand" href="index.php">Eniacoder</a>
    </nav>
  </header>


    <center>
      <div class="main">
        <h1>
          <span>Bug</span>
          <span>-</span>
          <span>P</span>
          <span>o</span>
          <span>r</span>
          <span>t</span>
          <span>a</span>
          <span>l</span>
        </h1>
      </div>
    </center>



    <center>
      <div class="container">
        <h2>Login</h2>
        <form action="index.php" method="POST" class="c1">
            <div class="form-group">
              <label class="log">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" style="width:300px;" aria-describedby="emailHelp">

              </div>
              <div class="form-group">
              <label class="log">Password</label>
              <input type="password" name="password" class="form-control" style="width:300px;" id="exampleInputPassword1">
              </div>
             <button class="btn btn-info my-2 my-sm-0" type="submit" name="submit">Submit</button>
       </form>
      </div>
     </center>



<?php
session_start();
include("connection.php");

if(isset($_POST['submit']))
{
 $em = $_POST['email'];
 $pas = $_POST['password'];

  $query = "SELECT * FROM LOGIN WHERE EMAIL = '$em'";
  $data= mysqli_query($conn,$query);
  $result = mysqli_fetch_assoc($data);

 if(($result['Password'] == $pas) && ($result['Email'] == $em))
 {
  $_SESSION['id'] =$result['id'];
  header('location:project.php');

 }
 else
  {
  echo "<script>alert('Your Email or Password is incorrect')</script>";
  }


 }
 ?>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
