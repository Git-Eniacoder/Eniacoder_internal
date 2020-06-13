<?php
include("connection.php");
session_start();
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
    <link rel="stylesheet" href="stylebuttom.css">
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
        <span>B</span>
        <span>u</span>
        <span>g</span>
        <span>s</span>
      </h1>
    </div>
   </center>

   <script>
    // When the user clicks on div, open the popup
    function myFunction() {
      var popup = document.getElementById("myPopup");
      popup.classList.toggle("show");
    }
    </script>

  <div class="popup" onclick="myFunction()"><button class="btn btn-dark my-2 my-sm-0"  type="submit">Report A New Bug</button>
    <span class="popuptext" id="myPopup">
      <div class="container">
        <form action="" method="" class="">
            <div class="form-group">
              <label class="log">Description</label>
              <input type="text" name="text" class="form-control" id="exampleInputEmail1" style="width:300px;" >

              </div>
              <div class="form-group">
              <label class="log">File/Image</label>
              <input type="file" name="file" class="form-control" style="width:300px;" id="exampleInputPassword1">
              </div>
             <button class="btn btn-info my-2 my-sm-0" type="submit" name="submit">Submit</button>
       </form>
      </div>
    </span>
  </div>

   <?php

   $temp = $_GET['q'];
      $query = "SELECT * FROM bug WHERE ID = '$temp'";
      $data= mysqli_query($conn,$query);
      $num = mysqli_num_rows($data);


      if($num != 0)
      {
        while($result = mysqli_fetch_assoc($data))
        {
          echo "<h3 class='pro'> <span> > </span> <a href='#' class='pn'>".$result['Bug']."</a></h3><br />";

          echo '<label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>';
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
