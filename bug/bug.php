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
	<style>
 .bt
 {
   margin-bottom:20px;
 }
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 400px; /* Full width */
  height: 300px; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 320px;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</style>

  <body>


  <?php include('header.php'); ?>



  <center>
    <div class="container">
      <h1>BUGS</h1>
    </div>
   </center>

<!-- Trigger/Open The Modal -->
<button class="bt" id="myBtn">New Bug</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <form action="add.php" method="post" enctype="multipart/form-data">
        <h2 class="text-center">New Bug Report</h2>       
        <div class="form-group">
            <input type="text" name="text" class="form-control" placeholder="Description" required="required">
        </div>
        <div class="form-group">
            <input type="file" name="uploadfile"  class="form-control" placeholder="File/Image" required="required">
        </div>
		<div class="form-group">
            <input type="hidden" name="pid"  value="<?php echo $_GET['q']?>">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Add</button>
        </div>
       
    </form>

  </div>

</div>

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

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>