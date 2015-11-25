<?php
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
        // Delete Data
        $id = $_POST['id'];
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "Delete from users where id=?";
        $stmt = $PDO->prepare($sql);
        $stmt->execute(array($id));
        $PDO = null;
        header("Location: table.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
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
            <h3>Delete a User</h3>
        </div>
    <form method="POST" action="delete.php">
        <input type="hidden" name="id" value="<?php echo $id;?>" />
        <p class="bg-danger" style="padding: 10px;">Are you sure to delete ?</p>
        <div class="form-actions">
            <button type="submit" class="btn btn-danger">Yes</button>
            <a class="btn btn btn-default" href="table.php">No</a>
        </div>
    </form>
                
    </div> <!-- /row -->
    </div> <!-- /container -->
</body>
<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src = 'dist/css/jquery-1.11.2.min.js'></script>
<!-- Latest compiled JavaScript -->
	<script src = 'dist/js/bootstrap.min.js'></script>
	<script src = 'js/tables.js'></script>
</html>
<?php
session_start();
if(!ISSET($_SESSION["newmember"])){
	header("Location: home.php");
	exit();
}
?>