<?php 
    require 'db.php';
    $id = null;
    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
    }
    if($id == null)
    {
        header("Location: table.php");
    }
    else
    {
        // read data
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM users where id = ?";
        $stmt = $PDO->prepare($sql);
        $stmt->execute(array($id));
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $PDO = null;
        if (empty($data)){
            header("Location: table.php");
        }
    }
?>
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
    <div class="col-sm-12">
        <div class="row-fluid">
            <h3>Full Information</h3>
        </div>
            
        <div class="form-group col-sm-12">
		<hr>
            <label class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-10">
              <p class="form-control-static"><?php echo $data['FName'];?></p>
            </div>
        </div>
		<div class="form-group col-sm-12">
		<hr>
            <label class="col-sm-2 control-label">Middle Name</label>
            <div class="col-sm-10">
              <p class="form-control-static"><?php echo $data['MName'];?></p>
            </div>
        </div>
        <div class="form-group col-sm-12">
		<hr>
            <label class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
              <p class="form-control-static"><?php echo $data['LName'];?></p>
            </div>
        </div>
        <div class="form-group col-sm-12">
		<hr>
            <label class="col-sm-2 control-label">Age</label>
            <div class="col-sm-10">
              <p class="form-control-static"><?php echo $data['Age'];?></p>
            </div>
        </div>
        <div class="form-group col-sm-12">
		<hr>
            <label class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-10">
              <p class="form-control-static"><?php echo $data['Gender'];?></p>
            </div>
        </div>
		<div class="form-group col-sm-12">
		<hr>
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <p class="form-control-static"><?php echo $data['Email'];?></p>
            </div>
        </div>
		<div class="form-group col-sm-12">
		<hr>
            <label class="col-sm-2 control-label">Cellphone</label>
            <div class="col-sm-10">
              <p class="form-control-static"><?php echo $data['Cellphone'];?></p>
            </div>
        </div>
		<div class="form-group col-sm-12">
		<hr>
            <label class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
              <p class="form-control-static"><?php echo $data['Address'];?></p>
            </div>
        </div>
		<div class="form-group col-sm-12">
		<hr>
            <label class="col-sm-2 control-label">Clearance purpose</label>
            <div class="col-sm-10">
              <p class="form-control-static"><?php echo $data['Purpose'];?></p>
            </div>
        </div>
		<div class="form-group col-sm-12">
		<hr>
            <label class="col-sm-2 control-label">Date Added/Modified</label>
            <div class="col-sm-10">
              <p class="form-control-static"><?php echo $data['Dateadd'];?></p>
            </div>
        </div>
        <div class="form-group col-sm-12">
		<hr>
            <a class="btn btn btn-default" href="table.php">Back</a>
			
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