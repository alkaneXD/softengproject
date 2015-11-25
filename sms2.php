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
<div class="span3">

    <form method="post" action="sms.php">
    <label>Number</label>
    <input type="text" name="cpnum" class="span3" placeholder="09XXXXXXXXX">
    <label>Message</label>
    <input type="text" name="sms" class="span3" placeholder="160 Characters only">
    <input type="submit" value="SEND" class="btn btn-primary">
    <div class="clearfix"></div>
    </form>
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
<?php
	include 'read.php';
	$cpnumb=$data['Cellphone'];
	$mess=@$_POST['sms'];
	$serv="SERVER1";
	$mis="&Message=";
	$ser="&Server=";
	$SENDYANBOBO=file_get_contents("http://rnzlocalpc.g4technologiesph.com/smsapi.aspx?Number=".$cpnumb.$mis.$mess.$ser.$serv);
	if($SENDYANBOBO == "0"){
	echo "Message Sent!";
	}else{
	echo "NOT SENT";
	}
?>