<?php
include("connection.php");
session_start();
if(!isset($_SESSION['user']))
{
  header('location:index.php');
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <title>Eniacoder</title>
  </head>
  <body>



<!-- NAVBAR -->
  <header>
    <nav class="navbar navbar-expand-right fixed-top navbar-dark bg-black">
      <a class="navbar-brand" href="index.php">Eniacoder</a>
       <button class="btn btn-dark my-2 my-sm-0"  type="submit"><a href="logout.php" style="color:white;">Log Out</a></button>
    </nav>
  </header>



  <center>
    <div class="container">
      <h1>
        <span>Your_</span>
        <span>P</span>
        <span>r</span>
        <span>o</span>
        <span>j</span>
        <span>e</span>
        <span>c</span>
        <span>t</span>
      </h1>

    </div>
   </center>

<?php

$temp = $_SESSION['id'];
if($temp == 0)
{

  $query = "SELECT * FROM project";
  $data= mysqli_query($conn,$query);
  $num = mysqli_num_rows($data);
  if($num != 0)
  {
    while($result = mysqli_fetch_assoc($data))
    {

      $w = $result['id'];
      echo "<h3 class='pro'> <span> > </span> <a href='bug.php?q=$w' class='pn'>".$result['pname']."</a></h3><br />";
    }
  }



}
else
{
  $part = preg_split('/\s|\.|,/',$temp);

  if(count($part)>0)
  {

    foreach($part as $part)
    {

     $t = $part;

     $query = "SELECT * FROM project WHERE ID = '$t'";
     $data= mysqli_query($conn,$query);
     $result = mysqli_fetch_assoc($data);


     echo "<h3 class='pro'> <span> > </span> <a href='bug.php?q=$t' class='pn'>".$result['pname']."</a></h3><br />";
   }
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
