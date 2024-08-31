<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Checkout</title>
       <style>
      body {
        font-family: 'Courier New', monospace;
      }
    </style>
           <script>
        function goToMenus() {
            window.location.href = './menus.php';
        }
    </script>
</head>
<body>
	 <?php 
        require_once 'dbFuncs.php';
        require_once 'pageFuncs.php';
        $order=$_POST["order"];
        //echo $order;
        $email=$_POST["email"];
        echo $email;
        $phone=$_POST["phone"];
        //echo $phone;
      

          echo "  Order has been placed!";  
          echo "<br>";
          echo "<br>";
          echo "<button type='button' class='btn btn-dark' onclick='goToMenus()'>Go to Home</button>";



        $conn=connectDB();


        	$query="SELECT * FROM customers where customerEmail=\"$email\";";
        	$arr=selectQueryResults($conn,$query);
            
        	if(count($arr)<1)
        	{
  
        		header('Location: ./customerLogin.php?msg=<h3 class="text-danger">Please login<h3>');
            exit;

        	}else{
            
        	//print_r($arr);
        	$cId=$arr[0]["customerId"];

            //print_r($order);
        	$itemArr=json_decode($order, true);
         //print_r($itemArr);

                foreach ($itemArr as $itemId => $quantity) {
        $query = "INSERT INTO `orders`(`customerID`, `itemID`, `quantity`, `size`, `orderDate`) VALUES (\"$cId\", \"$itemId\", \"$quantity\",\"M\", CURRENT_TIMESTAMP);";
        	insertQueryResult($conn, $query);	
        	}  
          }
    ?>
</body>
</html>
