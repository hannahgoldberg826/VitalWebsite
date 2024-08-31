<?php
	function connectDB()
	{
		
		//localhost server
		/*
		$hn="localhost";
		$un="phpAdmin";
		$pwd="PhpUser@1234";
		$db="vitalDB";
		*/
		
		//production server
		
		$hn="localhost";
		$un="u410327165_vitalAdmin";
		$pwd="200317399Hmg.";
		$db="u410327165_vitalDB";

		$conn=new mysqli($hn, $un, $pwd, $db);
		if($conn->connect_error) die("Fatal Error");
		return $conn;
	}

	function selectQueryResults($conn, $query)
	{
		$arr=array();
		$result=$conn->query($query);
      if(!$result) die("Fatal Error on query");

      $rows=$result->num_rows;
      for ($i=0; $i < $rows; $i++) { 
        $record=$result->fetch_array(MYSQLI_ASSOC);
        array_push($arr, $record);
      }
      $result->close();
      return $arr;  

	}
		function insertQueryResults($conn, $query)
	{
		$arr=array();
		$result=$conn->query($query);
      if(!$result) die("Fatal Error on query");

      $rows=$result->num_rows;
      for ($i=0; $i < $rows; $i++) { 
        $record=$result->fetch_array(MYSQLI_ASSOC);
        array_push($arr, $record);
      }
      header('Location: ./customerLogin.php');
      $result->close();  

	}

	function insertQueryResult($conn, $query)
{
    $result = $conn->query($query);
    
    if (!$result) {
        die("Fatal Error on query");
    }
}
?>