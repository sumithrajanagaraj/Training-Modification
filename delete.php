<?php
include"connection.php";

if(isset($_GET['email'])){
	$email = $_GET['email'];

	$sql = "DELETE FROM `user_master` WHERE `email` = '$email'";
	$sql2 = "DELETE FROM `details_master` WHERE `email` = '$email'";

	$result = $conn->query($sql);
	$result2 = $conn->query($sql2);
echo "<script>alert('Deleted Succesfuly');</script>";
	header("Location:details.php");
}

?>