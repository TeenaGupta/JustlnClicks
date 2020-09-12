<?php 
$name = $_POST['fullname'];
$email = $_POST['email'];
$mobile = $_POST['phone-number'];
$plans = $_POST['plans'];

// Database connection
$conn = new mysqli('localhost','root','','justinclicks',3308);
if ($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into form(name, email, mobile, plans) values(?,?,?,?)");
	$stmt->bind_param("ssis",$name, $email, $mobile, $plans);
	$stmt->execute();
	echo "submit successfully...";
	$stmt->close();
	$conn->close();
}

?>