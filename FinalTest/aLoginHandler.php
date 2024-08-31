<?php
	session_start();
	require_once 'dbFuncs.php';
	$email=$_POST["email"];
	$pwd=$_POST["pwd"];
	$name=$_POST["name"];
	$conn=connectDB();
	$sql = "SELECT * FROM `admin` WHERE `email`=\"$email\" AND `password`=\"$pwd\";";

	$arr=selectQueryResults($conn, $sql);

	if(count($arr)==1)
	{
		
		header('Location: ./searchOrders.php');
	}
	else 
		header('Location: ./adminLogin.php?msg=Password or email is not correct');
	$conn->close();
?>