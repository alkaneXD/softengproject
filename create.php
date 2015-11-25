<?php 
	date_default_timezone_set("Asia/Manila");
    if ( !empty($_POST)) {
        require 'db.php';
        // post values
        $fname  = $_POST['fname'];
		$mname = $_POST['mname'];
        $lname  = $_POST['lname'];
        $age    = $_POST['age'];
        $gender = $_POST['gender'];
		$email = $_POST['email'];
		$cellphone = $_POST['cellphone'];
		$address = $_POST['address'];
		$purpose = $_POST['purpose'];
		$dateadd = date('d-m-Y | H:i:s');
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO users (fname,mname,lname,age,gender,email,cellphone,address,purpose,dateadd) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $PDO->prepare($sql);
            $stmt->execute(array($fname,$mname,$lname,$age,$gender,$email,$cellphone,$address,$purpose,$dateadd));
            $PDO = null;
            header("Location: table.php");
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
    
                    <div class="row-fluid">
                    <div class="row-fluid">
                        <h3>Create a User</h3>
                    </div>
            
   <form method="POST" action="">
    <div class="form-group">
        <label for="inputFName">First Name</label>
        <input type="text" class="form-control" required="required" id="inputFName" name="fname" placeholder="First Name">
    </div>
	<div class="form-group">
        <label for="inputLName">Middle Name</label>
        <input type="text" class="form-control" required="required" id="inputLName" name="mname" placeholder="Middle Name">
    </div>
    <div class="form-group">
        <label for="inputLName">Last Name</label>
        <input type="text" class="form-control" required="required" id="inputLName" name="lname" placeholder="Last Name">
    </div>
    <div class="form-group">
        <label for="inputAge">Age</label>
        <input type="number" required="required" class="form-control" id="inputAge" name="age" placeholder="Age">
    </div>
    <div class="form-group">
        <label for="inputGender">Gender</label>
        <select class="form-control" required="required" id="inputGender" name="gender" >
        <option></option>
        <option value="male">Male</option>
        <option value="female">Female</option>
		<option value="female">Others</option>
        </select>
    </div>
	<div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="text" required="required" class="form-control" id="inputAge" name="email" placeholder="email@domain.com">
    </div>
	<div class="form-group">
        <label for="inputCellphone">Cellphone</label>
        <input type="text" required="required" class="form-control" id="inputAge" name="cellphone" placeholder="09XXXXXXXXX">
    </div>
	<div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" required="required" class="form-control" id="inputAge" name="address" placeholder="Full Address">
    </div>
    <div class="form-group">
        <label for="inputPurpose">Purpose</label>
        <input type="text" required="required" class="form-control" id="inputAge" name="purpose" placeholder="Purpose for the Clearance">
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-success">Create</button>
        <a class="btn btn btn-default" href="table.php">Back</a>
    </div>
</form>
                
    </div> <!-- /row -->
    </div> <!-- /container -->
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