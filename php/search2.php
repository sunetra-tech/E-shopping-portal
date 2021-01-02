<?php
session_start();
include("connection.php");

if(isset($_POST['submit']))
{
$name=$_POST['search'];


$query="SELECT id FROM `product` WHERE name like '%$name%'";
$data=mysqli_query($conn,$query);

$res=mysqli_fetch_assoc($data);

if(mysqli_num_rows($data)==0)
echo "<script type='text/javascript'>alert('No records found');</script>";
else{
$id=$res['id'];
header('location: product2.php?id='.$id);
}
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <title>Shopping Portal</title>
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
<!--
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="#">Shopping Portal</a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="#">Women</a></li>
        <li><a href="#">Men</a></li>
        <li>
          <a href="#" class="desktop-item">Accessories</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Dropdown Menu</label>
          <ul class="drop-menu">
            <li><a href="#">Jewellary</a></li>
            <li><a href="#">Shoes</a></li>
            <li><a href="#">Bags</a></li>
            <li><a href="#">Drop menu 4</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="desktop-item">Support</a>
          
        <li><a href="#">Profile</a></li>
      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>-->


   <div id="search">
    <form method="post" action="">
    <input type="text" id="t" name="search" placeholder="Search">
    <button id="b" name="submit">SEARCH</button>
  </div>
<div class="container">
  <br>
 <br>
</form>
 <div class="output" id="output">
  <h1 id="i1">Keep Shopping!</h1>
  <img src="image/tenor.gif" width="500px" height="500px" object-fit="cover" opacity="1">
 </div>
<br>
  <div class="chat">
  <button id="bt" class="btn-success"><a style="color: white;text-decoration: none;" href="chat/index.html">Chat Here!</a></button>
  </div>
</div>
<hr>
<div class="footer">
  <h2><a target="_blank" href=""><i class="fa fa-instagram"></i></a>

<a target="_blank" href=""><i class="fa fa-twitter"></i></a>
<a target="_blank" href=""><i class="fa fa-envelope"></i></a>

<a target="_blank" href=""><i class="fa fa-facebook"></i></a></h2>
  &copy;Shopping Portal
  <br>
  <br>
  </div>
</body>
</html>



