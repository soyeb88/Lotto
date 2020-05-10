<?php
ob_start();

try{

	$con  = new PDO("mysql:dbname=Lotto;host=localhost", "root", "Dhaka_22");
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

}
catch(PDOException $e){

	echo "Connection failed: " . $e->getMessage(); 

}
?>