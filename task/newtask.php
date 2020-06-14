<?php
include("connection.php");
session_start();
$query = "SELECT * FROM user_data ";
$data= mysqli_query($conn,$query);
$num = mysqli_num_rows($data);
 ?>
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
<?php include('header.php')?>
<div class="login-form">
<h1 class="text-center">Task Mangement Portal</h1>  
    <form action="add.php" method="post">
        <h2 class="text-center">Assign New Task</h2>       
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Task Name" required="required">
        </div>
        <div class="form-group">
            <textarea type="textbox" name="des" class="form-control" placeholder="Task Description" required="required"></textarea>
        </div>
		<input list="encodings" value="" name="email" class="col-sm-6 custom-select custom-select-sm" placeholder="Assign to">
		<datalist id="encodings">
			<?php
				while($result = mysqli_fetch_assoc($data))
				{	
					echo "<option value='".$result['email']."'>".$result['username']."</option>";
				}
			?>
		</datalist><br><br>
		<span style="font-weight:bold">Deadline:</span><br>
		<input type="date" id="start" name="dead" placeholder="deadline"><br><br>
		
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Add Task</button>
        </div>
    </form>
</div>
<?php include('footer.php');?>
</body>
</html>                                		


