<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Eniacoder</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="tasklist.php">All Task</a>
      <a class="nav-item nav-link" href="opentask.php">Open Task</a>
      <a class="nav-item nav-link" href="closetask.php">Closed Task</a>
      <a class="nav-item nav-link" href="newtask.php">Assign New Task</a>
      <a class="nav-item nav-link " href="logout.php">Logout</a>
    </div>
  </div>
</nav>
<?php 
if(!isset($_SESSION['email'])){
	header('location:index.php');
}?>