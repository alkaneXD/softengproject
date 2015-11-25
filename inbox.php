<?php
include "smsGateway.php";
$smsGateway = new SmsGateway('root.kiyen@gmail.com', 'alkane29');

$id = 1;

$result = $smsGateway->getMessages($id);
echo $result;

?>