<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
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

        pageHead1($logo1, "Checkout", $logged);
        if(isset($_GET["msg"]))
          echo $_GET['msg'];

        ?>
<form action ="./checkoutHandler.php" method="POST" onsubmit="return validate(this)">
  <div class="form-group">
    <label for="email">Confirm Email address</label>
    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" onblur="validateEmail(this)">
    <div id="eMsg">show error here</div>
    <input type="hidden" id="order" name="order" value="">
  </div>
   <div class="form-group">
    <label for="phone">Confirm Phone Number</label>
    <input type="text" class="form-control" id="phone" placeholder="XXX-XXX-XXXX" name="phone">
    
  </div>
    <div class="form-group">
    <label for="creditcard">Credit Card</label>
    <input type="text" class="form-control" id="pmt" placeholder="Credit card number" name="pmt" onblur="validatePay(this)">
    <div id="pMsg">show error here</div>
  </div>
    <a href="./menus.php" class="btn btn-dark" role="button" aria-pressed="true">Cancel</a>
  <button type="submit" class="btn btn-dark">Place order</button>
</form>

  
        <div id="outValue"></div>
</div>
    <script type="text/javascript" src="./jss/cartutil.js"></script>
    <script type="text/javascript" src="./jss/validate.js"></script>

    <script type="text/javascript">
        console.log("Before calling getOrdersForSever");
    let out = getOrdersForSever();
    console.log("After calling getOrdersForSever");

    // Set the order value
    document.getElementById("order").value = out;

    // Debugging: Print the value of 'out' on the screen
    let outValueElement = document.getElementById("outValue");
    if (outValueElement) {
        outValueElement.innerText = "Order details: " + out;
    } else {
        console.error("Element with ID 'outValue' not found");
    }

    </script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  </body>
</html>