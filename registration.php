<?php
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
// Database connection
$conn = new mysqli('localhost','root','','justinclicks',3308);
if ($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into register_login(name,password, email) values(?,?,?)");
	$stmt->bind_param("sss",$name, $password, $email);
	$stmt->execute();
	header('location:login.php');
	$stmt->close();
	$conn->close();
}
?>