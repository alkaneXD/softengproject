<?php
	date_default_timezone_set("Asia/Manila");
    $id = null;
    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
    }
    if($id == null)
    {
        header("Location: table.php");
    } 
    if ( !empty($_POST))
    {
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
        $sql = "Update users set fname=?,mname=?,lname=?,age=?,gender=?,email=?,cellphone=?,address=?,purpose=?,dateadd=? where id=?";
        $stmt = $PDO->prepare($sql);
        $stmt->execute(array($fname,$mname,$lname,$age,$gender,$email,$cellphone,$address,$purpose,$dateadd,$id));
        $PDO = null;
        header("Location: table.php");
        }
    else{
        require 'db.php';
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM users where id = ?";
        $stmt = $PDO->prepare($sql);
        $stmt->execute(array($id));
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $PDO = null;
        if (empty($data)){
            header("Location: table.php");
        }
        $fname  = $data['FName'];
		$mname  = $data['MName'];
        $lname  = $data['LName'];
        $age    = $data['Age'];
        $gender = $data['Gender'];
		$email = $data['Email'];
		$cellphone = $data['Cellphone'];
		$address = $data['Address'];
		$purpose = $data['Purpose'];
		$dateadd = date('d-m-Y | H:i:s');
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
                        <h3>Update Information</h3>
						<br></br>
                    </div>
            
                    <form method="POST" action="update.php?id=<?php echo $id?>">
    <div class="form-group">
        <label for="inputFName">First Name</label>
        <input type="text" class="form-control" required="required" id="inputFName" value="<?php echo !empty($fname)?$fname:'';?>" name="fname" placeholder="First Name">
    </div>
	<div class="form-group">
        <label for="inputMName">Middle Name</label>
        <input type="text" class="form-control" required="required" id="inputMName" value="<?php echo !empty($mname)?$mname:'';?>" name="mname" placeholder="Middle Name">
    </div>
	
    <div class="form-group">
        <label for="inputLName">Last Name</label>
        <input type="text" class="form-control" required="required" id="inputLName" value="<?php echo !empty($lname)?$lname:'';?>" name="lname" placeholder="Last Name">
    </div>
    <div class="form-group">
        <label for="inputAge">Age</label>
        <input type="number" required="required" class="form-control" id="inputAge" value="<?php echo !empty($age)?$age:'';?>" name="age" placeholder="Age">
    </div>
    <div class="form-group">
        <label for="inputGender">Gender</label>
        <select class="form-control" required="required" id="inputGender" name="gender" >
        <option></option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
		<option value="Others">Others</option>
        </select>
    </div>
	<div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="text" class="form-control" required="required" id="inputEmail" value="<?php echo !empty($email)?$email:'';?>" name="email" placeholder="Email">
    </div>
	<div class="form-group">
        <label for="inputCellphone">Cellphone</label>
        <input type="text" class="form-control" required="required" id="inputCellphone" value="<?php echo !empty($cellphone)?$cellphone:'';?>" name="cellphone" placeholder="Cellphone">
    </div>
	<div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" required="required" id="inputAddress" value="<?php echo !empty($address)?$address:'';?>" name="address" placeholder="Address">
    </div>
	<div class="form-group">
        <label for="inputPurpose">Purpose</label>
        <input type="text" class="form-control" required="required" id="inputPurpose" value="<?php echo !empty($purpose)?$purpose:'';?>" name="purpose" placeholder="Purpose">
    </div>
	
    
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Update</button>
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