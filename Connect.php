<?php
function doConnect() { 
	$user = 'root'; 
	$pass = '';  
	$dsn = 'mysql:host=localhost;dbname=buvettes'; 
	try{
		$dbh= new PDO($dsn, $user, $pass); 
		return $dbh;
	} catch (PDOException $e){ 
		print "Erreur ! :" . $e->getMessage() . "<br/>"; 
		die(); 
	}
	return null;
}
?>