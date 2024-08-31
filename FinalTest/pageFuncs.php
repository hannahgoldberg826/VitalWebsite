<?php
	function pageHead1($img, $title, $logged)
{
	echo " <nav class=\"navbar navbar-expand-lg bg-light\">";
	echo "<img src=\"./images/$img\" class=\"img-thumbnail\" alt=\"$img\" width=\"100\" height=\"100\">";
	echo "<h3>$title</h3>";

if(!$logged)
{
	echo<<<_END

  <div class="container-fluid offset-md-2">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="menus.php">SHOP</a>
        </li>
        
     
        
        <li class="nav-item">
          <a class="nav-link" href="#">Cart</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Customer
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./customerLogin.php">Login</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            <li><a class="dropdown-item" href="customerSignup.php">Signup</a></li>
             <li><a class="dropdown-item" href="adminLogin.php">Admin Login</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
_END;
}
else 
{
    echo<<<_END

  <div class="container-fluid offset-md-2">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="menus.php">SHOP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">Cart</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Customer
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Your Orders</a></li>
            <li><a class="dropdown-item" href="#">Signup</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
_END;

}

}

?>