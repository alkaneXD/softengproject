<!DOCTYPE html>
<html lang = 'en'>

<head>
	<meta charset = 'utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.googleapis.com/css?family=Muli" rel="stylesheet" type="text/css">
	<link rel = 'stylesheet' href = 'dist/css/bootstrap.min.css'>
	<link rel = 'stylesheet' href = 'dist/css/bootstrap.css'>
</head>

<body>
<div class="container">
    <div class="row-fluid">
    <h3>Data Management</h3>
    </div>
	
    <div class="row-fluid">
	
   	<div class="input-group">
	<span><a class="btn btn-xl btn-success" href="create.php">Create Information</a></span>
	<span><a class="btn btn-xl btn-info" href="adminpanel.php">&nbspBack to Dashboard</a></span>
	</div>
	<div class="input-group"> <span class="input-group-addon">Search Information</span>
    <input id="filter" type="text" class="form-control" placeholder="Type here..."></div>
    <table class="table table-striped table-bordered table-hover">
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Action</th>
    </tr>
    <tbody class='searchable'>
    <?php
    include 'db.php';
    $sql = 'SELECT * FROM users ORDER BY ID DESC';
    foreach ($PDO->query($sql) as $row) {
        echo '<tr>';
        echo '<td>'. $row['ID'] . '</td>';
        echo '<td>'. $row['FName'] . ' '. $row['LName'] . '</td>';
        echo '<td>'. $row['Age'] . '</td>';
        echo '<td>'. $row['Gender'] . '</td>';
        echo '<td><a class="btn btn-xs btn-info" href="read.php?id='. $row['ID'] . '">Read</a>&nbsp;
                  <a class="btn btn-xs btn-primary" href="update.php?id='. $row['ID'] . '">Update</a>
                  <a class="btn btn-xs btn-danger" href="delete.php?id='. $row['ID'] . '">Delete</a>
              </td>';
        echo '</tr>';
    }
$PDO = null;
    ?>
    </tbody>
    </table>
    </div><!-- /row -->
</div><!-- /container -->
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