<?php
ob_start();

try{

	$con  = new PDO("mysql:dbname=O5PMuJEaj7;host=remotemysql.com:3306", "O5PMuJEaj7", "rEY3neOmdm");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

}
catch(PDOException $e){

	echo "Connection failed: " . $e->getMessage(); 

}
?>