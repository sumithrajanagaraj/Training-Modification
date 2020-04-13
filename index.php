<!DOCTYPE html>
<html>
<head>
	<title>PRACTICE IF CONDITIONS and loops</title>
</head>
<body>
<form method="post" action="index.php">
	<input type="text" name="username" id placeholder="Username" required="">
	<br><br>
	<input type="password" name="password" placeholder="Password" required="">
	<br><br>
	<input type="submit" name="submit" value="Login">

</form>
</body>
</html>

<?php
$password = "hellopassword";

if(isset($_POST['username'])){
	$pass = $_POST['password'];
	$uname = $_POST['username'];
	if($pass == $password){
		echo "Login Successful";
		session_start();
		$_SESSION['uname'] = $uname;
		$_SESSION['logged_in'] = "TRUE";
	}
	else{
		echo "login failed";
		echo "Please Login to continue.";
	}
}



?>