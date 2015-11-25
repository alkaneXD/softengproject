<!DOCTYPE html>
<html lang = 'en'>

<head>
	<meta charset = 'utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.googleapis.com/css?family=Muli" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href='css/edit.css'>
	<link rel = 'stylesheet' href = 'dist/css/bootstrap.min.css'>
	<link rel = 'stylesheet' href = 'dist/css/bootstrap.css'>
</head>

<body>
            <div class="container">
    <h1>Add Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <!--div class="col-md-3">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div-->
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          Please fill up all informations.
        </div>
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form" method="post" action="tables.php">
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="first" required>
            </div>
          </div>
		  <div class="form-group">
            <label class="col-lg-3 control-label">Middle name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="middle" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="last" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="address" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" required>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Birthday</label>
            <div class="col-md-8">
              <input class="form-control" type="text" placeholder="MM/DD/YY" name="bday" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Age</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="age" required>
            </div>
          </div>
		  <div class="form-group">
            <label class="col-md-3 control-label">Cellphone #:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="cp" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes" >
              <span></span>
              <input type="reset" class="btn btn-default" value="Reset">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
</body>
<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src = 'dist/css/jquery-1.11.2.min.js'></script>
<!-- Latest compiled JavaScript -->
	<script src = 'dist/js/bootstrap.min.js'></script>
</html>
<?php
session_start();
if(!ISSET($_SESSION["newmember"])){
	header("Location: home.php");
	exit();
}
?>