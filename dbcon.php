<?php
$servername="localhost";
$username = "whoamifk";
$password="3563db91d06e90d45c5976fdc72a210b"; 
$conn;
try{
	$conn = new PDO("mysql:host=$servername;dbname=whoamifk",$username,$password); 
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){ 
	echo "<script>alert('database is not connected...');</script>";
} 
?>
