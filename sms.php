<?php
include "smsGateway.php";
$smsGateway = new SmsGateway('root.kiyen@gmail.com', 'alkane29');
$deviceID = 6937;
$number = $_POST['numero'];
$message = $_POST['mensahe'];
$smsGateway->sendMessageToNumber($number, $message, $deviceID);
?>
<html>
	<head>
		<meta http-equiv="refresh" content="0.1;url=adminpanel.php" />
	</head>
</html>