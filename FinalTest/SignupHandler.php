<?php
	session_start();
    require_once'dbFuncs.php';
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pwd = $_POST["pwd"];
    $conn = connectDB();
    
    $sql = "INSERT INTO `customers` (`customerId`, `customerName`, `customerEmail`,`customerPhone`, `password`) VALUES (null, \"$name\",\"$email\" ,\"$phone\" ,SHA1(\"$pwd\"))";


     $arr=insertQueryResults($conn, $sql);
   

  $conn->close();

  ?>