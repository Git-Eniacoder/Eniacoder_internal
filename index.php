<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Team Eniacoder</title>
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

    .contn{
      width: 100%;
      height: auto;
      padding: 10rem;
    }
.head{
  background-color: #f05b23;
  width: 100%;
}

    .contn .flex {
  display: flex;
  flex-wrap: wrap;
  margin: 0px auto;
  
}

.contn .card{
  width: 100%;
  border: 1px solid grey;
  border-radius: 4px;
  box-shadow: 0px 0px 8px 4px rgba( 0, 0, 0 , 0.3);
  z-index: +1;
  margin-bottom: 20px;
}

.contn .card .card-body{
  margin: 0.2px;
  background-color: green;
}
.contn .card .card-body:hover{
  background-color: #f05b23;

}
.contn .card a{
  text-decoration: none;
}
</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark head">
    <a class="navbar-brand" href="http://eniacoder.com/">Eniacoder</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Team Portal <span class="sr-only">(current)</span></a>
      </div>
    </div>
  </nav>
  <div style="background-image: url('image/bg.jpg');">
  <div class=" container contn">
    <div class="flex justify-content-center">
      <div class="col-md-4 ">
        <div class="card">
          <a href="bug">
            
              <img class="card-img-top" src="image/bug.jpg" alt="Bug Managment System">
              <div class="card-body">
                <p class="card-text text-white text-center">Bug Management System</p>
              </div>
          
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <a href="task">
            
              <img class="card-img-top" src="image/task.png" alt="Task Management">
              <div class="card-body">
                <p class="card-text text-white text-center">Task Management System</p>
              </div>
            	
          </a>
        </div>
      </div>

    </div>
  </div>
  </div>





<?php include('footer.php');?>
                              		

