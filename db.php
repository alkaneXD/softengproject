<?php
    $host='localhost';
    $user='root';
    $pass='alkane29';
    $dbname='sapangmaragul';
    try 
    {
        $PDO =  new PDO( "mysql:host=".$host.";"."dbname=".$dbname, $user, $pass);  
    }
    catch(PDOException $e) 
    {
        die($e->getMessage());  
    }
?>