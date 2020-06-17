<?php include('session.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <title>Eniacoder</title>
  </head>

<style>
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
    padding: 15px;
    
    }
</style>

  <body>


  <?php include('header.php'); ?>



  <center>
    <div class="container">
      <h1>BUGS</h1>
    </div>
   </center>

<?php 
include('add.php');
 ?>

  <table style="width:100%">
   <?php

   $temp = $_GET['q'];
   
   
      
        $query = "SELECT * FROM bug WHERE ID = '$temp'";
      $data= mysqli_query($conn,$query);
      $num = mysqli_num_rows($data);

      echo "<tr><th>
      Description
      </th>
      <th>
      Status
      </th>
      <th>
      file/image
      </th>
      <th>
      Open/close
      </th></tr>";
      if($num != 0)
      {
        while($result = mysqli_fetch_assoc($data))
        {
        echo "<tr>
        <td>$result[bug]</td>
        <td>$result[status]</td>
        <td><img src='$result[img]' height='100' width='100'></td>
        <td>open</td>
        </tr>";
        }
      }
    echo "</table>";
      
      
    ?>



<?php include('footer.php'); ?>
  </body>
</html>
