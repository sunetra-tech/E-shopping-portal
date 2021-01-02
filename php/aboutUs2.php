<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping Portal</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/aboutUs.css">
  
        
  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Shopping Portal</a>
    </div>
     <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">Category <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <h6 class="dropdown-header">Class-wise Category</h6>
            <li><a href="#women">Women</a></li>
            <li><a href="#men">Men</a></li>
            <li><a href="#kids">Kids</a></li>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Item-wise Category</h6>
            <li><a href="#cloth">Clothing</a>
            <li><a href="#access">Accessories</a></li>
            <li><a href="#shoes">Shoes</a></li>
            <li><a href="#miss">Miscellaneous</a></li>
          </ul>
        </li>

        <li><a href="aboutUs2.php">About Us</a></li>
        <li><a href="support2.php">Support Page</a></li>
        <li><a href="search2.php"><span class="glyphicon glyphicon-search"></span> Search</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="aa">Hi! <?php echo ($_SESSION['uname']);?>
 </li>
        <li><a href="wish.php"><span class="glyphicon glyphicon-heart"></span>Wishlist</a></li>
        <li><a href="cartshow.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
        
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user ">Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php">Profile</a></li>
            <li><a href="wish.php">Wishlist</a></li>
            <div class="dropdown-divider"></div>
            <li><a href="cartshow.php">Cart</a>
            <li><a href="logout.php">Sign Out</li></a>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

		
	 <section>
            <div class = "image">
                <!-- image here -->
            </div>

            <div class = "content">
                <h2>About Us</h2>
                <span><!-- line here --></span>

                <p>If you would like to experience the best of online shopping for men, women and kids in India, you are at the right place. MyShop is the ultimate destination for fashion and lifestyle.</p>

                <ul class = "links">
                    <li><a href = "cp2.php">work</a></li>

                    <div class = "vertical-line"></div>

                    <li><a href = "cp2.php">service</a></li>

                    <div class = "vertical-line"></div>
                    
                    <li><a href = "cp2.php">contact</a></li>
                </ul>

                <ul class = "icons">
                    <li>
                        <i class = "fa fa-twitter"></i>
                    </li>
                    <li>
                        <i class = "fa fa-facebook"></i>
                    </li>
                    <li>
                        <i class = "fa fa-envelope"></i>
                    </li>
                    <li>
                        <i class = "fa fa-instagram"></i>
                    </li>
                </ul>
            </div>
        </section>
</body>
</html>