<?php
require"connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Form</title>
</head>
<body>
<form method="post" action="index.php">
	<input type="text" name="username" id placeholder="Username" required="">
	<br><br>
	<input type="email" name="email" id placeholder="Email" required="">
	<br><br>
	<input type="password" name="password" placeholder="Password" required="">
	<br><br>
	<input type="submit" name="submit" value="Register">

</form>


<?php

if(isset($_POST['username'])&& isset($_POST['email'])&& isset($_POST['password'])){
	$name = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);


	$sql = "INSERT INTO user_master (name,email,password) VALUES('$name','$email', '$password')";

	$result = $conn->query($sql);
	if($result){
		echo "Data Inserted Succesfuly";
	}
	else{
		echo "There is a error.";
	}
}
?>
<p align="center">
<a href="login.php">Login To Continue</a>
</p>
</body>
</html>