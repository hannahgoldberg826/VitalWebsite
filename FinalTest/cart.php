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
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
      body {
        font-family: 'Courier New', monospace;
      }
    </style>
  </head>
  <body style ="background-color:bg-light;">
    <div class="container">
      <?php 
        require_once "dbFuncs.php";
        require_once "pageFuncs.php";
        $logo1="vitalLogo.jpg";
        $title="Cart";
        //$logged=false;
        pageHead1($logo1, $title, $logged);
      ?> 
      <div id="info">
       </div> 
       <a href="./menus.php" class="btn btn-dark" role="button" aria-pressed="true">Continue Shopping</a>
      <button type="button" onclick="clearcartHTML()"class="btn btn-dark">Clear cart</button>
      <a href="./checkout.php" class="btn btn-dark" role="button" aria-pressed="true">Check out</a>
    </div>

    <script type="text/javascript"src="./jss/cartutil.js"></script>
<script type="text/javascript">
    let out=displayCartItems();
    document.getElementById("info").innerHTML=out;
    </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>