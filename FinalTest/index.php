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
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <?php 
        require_once "dbFuncs.php";
        require_once "pageFuncs.php";
        $logo1="vitalLogo.jpg";
        $title="Home";
        //$logged=false;
        pageHead1($logo1, $title, $logged);
        echo "<center><h2 style='font-family: Courier New, monospace;'>Welcome to VITAL</h2></center>";
        echo "<br>" ;
        echo "<center><h4 style='font-family: Courier New, monospace;'>Elevate your style with our curated collection of must-have wardrobe essentials!</h4></center>";
        echo "<br>" ;
      ?> 
  
         <center><img src="./images/hp.JPG" width="400" height="400" alt="picture"></center>

    </div>
    <?php
    echo "<br>" ;
    echo "<center> <h6 style='font-family: Courier New, monospace;'>Explore timeless fashion from the heart of Georgia with our globally inspired collection. Enjoy the convenience of shopping from the comfort of your home, as we proudly offer worldwide shipping to bring the best in style straight to your doorstep. Elevate your wardrobe effortlessly with us :)</h6></center>";
    echo "<br>" ;
    echo "<center><h5 style='font-family: Courier New, monospace;'>Discover the latest in wardrobe essentials by clicking on SHOP now</h5></center>";
    echo "<br>" ;
     ?>
     <style>
            body {
            text-align: center;
        }

        .image-container {
            display: inline-block;
            margin: 10px; /* Add some margin between images */
        }
    </style>

<div class="image-container">
    <img src="./images/image1.jpg" alt="Description for Image 1" width="200" height="300">
</div>


<div class="image-container">
    <img src="./images/image2.jpg" alt="Description for Image 2" width="200" height="300">
</div>


<div class="image-container">
    <img src="./images/image3.jpg" alt="Description for Image 3" width="200" height="300">
</div>


<div class="image-container">
    <img src="./images/image4.jpg" alt="Description for Image 4" width="200" height="300">
</div>


<div class="image-container">
    <img src="./images/image5.jpg" alt="Description for Image 5" width="200" height="300">
</div>


<div class="image-container">
    <img src="./images/image6.jpg" alt="Description for Image 6" width="200" height="300">
</div>
     <?php
     echo "<br>" ;
     echo "<br>" ;
    echo"<center style='font-family: Courier New, monospace;'>For any inquiries or assistance, please feel free to contact us at vital@gmail.com. Our dedicated team is here to help you find the perfect essentials for your wardrobe.</center>";
    echo "<br>" ;
     echo "<br>" ;
    ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>