<?php
session_start();
if(!ISSET($_SESSION["newmember"])){
	header("Location: home.php");
	exit();
}
?>
<head>
	<meta charset = 'utf-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.googleapis.com/css?family=Muli" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href='css/send.css'>
	<link rel = 'stylesheet' href = 'dist/css/bootstrap.min.css'>
	<link rel = 'stylesheet' href = 'dist/css/bootstrap.css'>
</head>

<body>
<div class="container">
<form method="post" action="sms.php">
<fieldset>

<!-- Form Name -->
<legend class="text-center">Send SMS</legend>

<!-- Text input-->
<div class="form-group">
  <label for="numero">Cellphone #</label>  
  <input id="numero" name="numero" type="text" placeholder="09XXXXXXXXX" class="form-control">
  </div>

<!-- Textarea -->
<div class="form-group">
  <label for="mensahe">Message</label>
    <input class="form-control" id="mensahe" name="mensahe" placeholder="Type your message">
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label for="submit"></label>
    <button type="submit" id="submit" name="submit" class="btn btn-success">Send</button>
    <button href="adminpanel.php" class="btn btn-danger">Cancel</button>
</div>

</fieldset>
</form>
</div>
</body>
<!-- jQuery library -->

	<script src = 'dist/css/jquery-1.11.2.min.js'></script>
<!-- Latest compiled JavaScript -->
	<script src = 'dist/js/bootstrap.min.js'></script>
</html>