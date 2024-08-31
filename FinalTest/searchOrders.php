<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
         <style>
      body {
        font-family: 'Courier New', monospace;
      }
    </style>
  </head>
  <body style ="background-color:lightgrey;">
    <div class="container">
      <?php 
        require_once "pageFuncs.php";
        require_once "dbFuncs.php";
        $logo1="vitalLogo.jpg";
        $title="Display all Orders";
        
        pageHead1($logo1, $title, $logged);
        if(isset($_GET["msg"]))
          echo $_GET['msg'];
        $conn=connectDB();
        // Fetch all orders from the orders table organized by itemID
     $sql = "SELECT orderID, customerID, itemID, quantity, orderDate FROM `orders` ORDER BY itemID, orderDate";
    $result = $conn->query($sql);
    ?>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Order ID</th>
                <th>Customer ID</th>
                <th>Item ID</th>
                <th>Quantity</th>
                <th>Order Date</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['orderID']}</td>
                        <td>{$row['customerID']}</td>
                        <td>{$row['itemID']}</td>
                        <td>{$row['quantity']}</td>
                        <td>{$row['orderDate']}</td>
                      </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>

    </div>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>