<!DOCTYPE html>
<html lang = 'en'>

<head>
	<meta charset = 'utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.googleapis.com/css?family=Muli" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href='css/dashboard.css'>
	<link rel="stylesheet" href='css/modal.css'>
	<link rel = 'stylesheet' href = 'dist/css/bootstrap.min.css'>
	<link rel = 'stylesheet' href = 'dist/css/bootstrap.css'>
</head>

<body>
<div class="container text-center">
    <div class="row-fluid text-center">
        <div class="col-md col-xs">
            <div class="panel panel-primary text-center">
                <div class="panel-heading text-center">
                    <h1 class="panel-title">
                        <span class="glyphicon glyphicon-user"></span>&nbsp&nbsp&nbsp Admin Dashboard</h1>
                </div>
                <div class="panel-body text-center">
                    <div class="row-fluid">
                        <div class="col-md-12">
                          <a href="table.php" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-plus text-center"></span><br/>Manage</a>
						  <a href="send.php" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-envelope text-center"></span> <br/>SMS</a>
                          <a href="example/index.php" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-calendar text-center"></span> <br/>Calendar</a>
                          <a href="logout.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-off text-center"></span> <br/>Log Out</a>
                        </div>
                    </div>
                </div>
				</div>
        </div>
    </div>
</div>

</body>
<!-- jQuery library -->
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