<?php
	session_start();
	require_once 'dbFuncs.php';
	$email=$_POST["email"];
	$pwd=$_POST["pwd"];
	$conn=connectDB();
	$sql = "SELECT * FROM `customers` WHERE `customerEmail`=\"$email\" AND `password`=SHA1(\"$pwd\");";
	$arr=selectQueryResults($conn, $sql);

	if(count($arr)==1)
	{
		$_SESSION['name']=$arr[0]["customerName"];
		$_SESSION['id']=$arr[0]["customerId"];
		$_SESSION['email']=$arr[0]["customerEmail"];
		header('Location: ./menus.php');
	}
	else 
		header('Location: ./customerLogin.php?msg=Password or email is not correct');
	$conn->close();
?>