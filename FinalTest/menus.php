<?php
session_start();
if(isset($_SESSION["name"]))
  $logged=true;
else 
  $logged=false;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
      body {
        font-family: 'Courier New', monospace;
      }
    </style>
  </head>
  <body class="bg-light">
    <div class="container">
      <?php 
        require_once "dbFuncs.php";
        require_once "pageFuncs.php";
        $logo1="vitalLogo.jpg";
        $title="SHOP";
        //$logged=false;
        pageHead1($logo1, $title, $logged);
        $conn=connectDB();

        $query= "SELECT * FROM shop;";
        $arr=selectQueryResults($conn,$query);
        
        echo "<div class=\"row\">";

        foreach ($arr as $item) {
          $img=$item["imgName"];
          $n=$item["itemName"];
          $p=$item["price"];
          $pid=$item["itemID"];
          $hiddenInfo=implode("|", $item);
          echo "<div class=\"col-4\">";
          echo "<br>";
          echo "<br>";
          echo "<img src=\"./images/$img\" alt=\"$img\"  width=\"200\" height=\"200\">";
          echo "<h5>$n<br>$p<br></h5>";
          echo "<button type=\"button\" onclick= \"addToCart($pid)\" class=\"btn btn-dark\">Add to Cart</button>";
          echo "<br>";
          echo "<br>";
          echo "<br>";
         echo "<input type=\"hidden\" id=\"item$pid\"  value=\"$hiddenInfo\"> ";
         echo "<br>";
         echo "</div>"; 
        }
        echo "</div>";
        $conn->close();
      
      ?> 
    </div>
   <script type="text/javascript" src="./jss/cartutil.js"></script>

   
   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>