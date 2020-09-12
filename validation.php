<?php
$name = $_POST['name'];
$password = $_POST['password'];
// Database connection
$conn = new mysqli('localhost','root','','justinclicks',3308);
if ($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("select * from register_login where name = ?");
	$stmt->bind_param("s", $name);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
	if ($stmt_result->num_rows > 0) {
		$data = $stmt_result->fetch_assoc();
		if ($data['password'] === $password) {
			echo "<h2>Login successfully</h2>";
		}else{
			echo "<h2> Invalid Email or password</h2>";
		}
	}else {
		echo "<h2> Invalid Email or password</h2>";
	}
}
?>