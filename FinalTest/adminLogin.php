<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>
      body {
        font-family: 'Courier New', monospace;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <?php 
        require_once "dbFuncs.php";
        require_once "pageFuncs.php";
        $logo1="vitalLogo.jpg";
        $title="Admin Login";
    
        pageHead1($logo1, $title, $logged);
        if(isset($_GET["msg"]))
          echo $_GET['msg'];
        ?>
<form action ="./aLoginHandler.php" method="POST">
        <form>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="pwd">
  </div>
  <button type="submit" class="btn btn-dark">Submit</button>
</form>
<?php
        echo "</div>";
      
      
      ?> 
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>