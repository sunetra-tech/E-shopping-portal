<?php
session_start();
include("connection.php");

$id=$_SESSION['uid'];
$query="select * from cart where userid='$id'";
$data=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopping Portal</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/cart.css?v=<?php echo time(); ?>">
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
        <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
        
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user ">Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php">Profile</a></li>
            <li><a href="wish.php">Wishlist</a></li>
            <div class="dropdown-divider"></div>
            <li><a href="cart.html">Cart</a>
            <li><a href="logout.php">Sign Out</li></a>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <h1 align="center">My Cart</h1><br>
  
<div class="left">
<?php
$p=0;
$d=500;
while($row=mysqli_fetch_array($data))
 {
  $pid=$row['prod_id'];
  $query2="select * from product where id='$pid'";
  $data2=mysqli_query($conn,$query2);
  $row2=mysqli_fetch_assoc($data2);
  $query3="select image from product_pic where prod_id='$pid'";
  $data3=mysqli_query($conn,$query3);
  $row3=mysqli_fetch_assoc($data3);
  $p=$p+$row['total_price'];
?>

<div class="row">
<div class="card colo-md-4" style="width:90%;padding-left:10px;padding-top:10px;" >
  <?php echo '<img src="data:Sqlimage/jpeg;base64,'.base64_encode( $row3['image'] ).'"style="width:250px;height:200px;""/>'; ?>
  <div class="card-body" style="padding-left:140px;margin: -200px;"><center><br>
    <h4 class="card-title"><b><?php echo $row2['name'] ?></b></h4>
    <p class="card-text"><?php echo $row2['description'] ?></p>
    Options<br><?php
    if($row2['choices']!="")
  echo $row2['choices'] ?><br><br>
<p><b>Price Per Unit: Rs. <?php echo $row['price_per_unit'] ?>/-</b></p>
   <b> Quantity: <?php echo $row['qty'] ?>
    <p>Total Price: Rs. <?php echo $row['total_price'] ?>/-</b></p><br>
    Offer<br>
    <?php echo $row2['offer'] ?>
    <br><Br><br>
    <div class="bottom">
    <!--<a href="houses.php" class="btn btn-primary">Remove</a>&nbsp;&nbsp;-->
   <!-- <a href="houses.php" class="btn btn-primary">Move to Wishlist</a>--></center></div>
    <br>
  </div>
</div>

<br>
<?php
}
?>

<br><br>
<h1>PRICE DETAILS</h1><br>
  <p> Total MRP: Rs.<?php echo $p ?>/-</p>
  <p> Discount on MRP: Rs.0/-</p>
  <p> Delivery Fee: Rs.<?php echo $d ?>/-</p>
  <?php $q=$p+$d ?>
  <p><b>Total Amount:   Rs.<?php echo $q ?>/-</b></p><br><br><br>
  <button id="bt2" class="btn-danger"><a style="text-decoration: none;color: white;" href="book.php?price= <?php echo $q ?>">Place Order</a></button>
</div>

<div class="right">
  <!--
  <h1>PRICE DETAILS</h1><br>
  <p> Total MRP: Rs.2000/-</p>
  <p> Discount on MRP: Rs.2000/-</p>
  <p> Delivery Fee: Rs.200/-</p>
  <p><b>Total Amount:   Rs.2200/-</b></p><br><br><br>
  <button id="bt2" class="btn-success">Place Order</button>-->
</div>
</div>

<div class="chat">
  <button id="bt" class="btn-danger"><a style="color: white;text-decoration: none;" href="chat/index.html">Chat Here!</a></button>
  </div>
</div>
</div>
<br><br><br><hr>
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
