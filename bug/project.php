<?php include('session.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <title>Eniacoder</title>

    <style>
    table, th, td {
      border: 1px solid black;
    }

    </style>
  </head>
  <body>

  <?php include('header.php'); ?>


  <center>
    <div class="container">
      <h1>PROJECTS</h1>

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
  { $i=0;
    while($result = mysqli_fetch_assoc($data))
    {
      $i++;
      $w = $result['id'];
      
      
        echo "<h3 class='pro'>$i.<a href='bug.php?q=$w' class='pn'>".$result['pname']."</a></h3><br />";
    
      
    }
  }



}
else
{
  $part = preg_split('/\s|\.|,/',$temp);

  if(count($part)>0)
  {
    $i=0;
    foreach($part as $part)
    {
      $i++;
     $t = $part;

     $query = "SELECT * FROM project WHERE ID = '$t'";
     $data= mysqli_query($conn,$query);
     $result = mysqli_fetch_assoc($data);
     

     echo "<h3 class='pro'>$i.<a href='bug.php?q=$t'  class='pn'>".$result['pname']."</a></h3><br />";
   }
  }
}



 ?>

<?php include('footer.php'); ?>
  </body>
</html>
