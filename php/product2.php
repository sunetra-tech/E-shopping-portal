<?php
session_start();
include("connection.php");

$id=$_GET['id'];

$query="select * from product where id='$id'";
$data=mysqli_query($conn,$query);

$query3="select image from product_pic where prod_id='$id'";
$data3=mysqli_query($conn,$query3);

$query2="select * from review where prod_id='$id'";
$data2=mysqli_query($conn,$query2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopping Portal</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="css/product.css?v=<?php echo time(); ?>">
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
<div class="container">
  <div class="product">
    <?php
while($row=mysqli_fetch_assoc($data))
{?>
<div class="leftc">
<div class="top">
  <h1><?php echo $row['name'] ?></h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <?php
$row3=mysqli_fetch_array($data3);
?>
      <div class="item active">
    <?php   echo '<img src="data:Sqlimage/jpeg;base64,'.base64_encode( $row3['image']  ).'"style="height:200px;""/>'; ?>
      </div>
    <div class="item">
        <?php   echo '<img src="data:Sqlimage/jpeg;base64,'.base64_encode( $row3['image'] ).'"style="height:200px;""/>'; ?>
      </div>
      <div class="item">
        <?php   echo '<img src="data:Sqlimage/jpeg;base64,'.base64_encode( $row3['image'] ).'"style="height:200px;""/>'; ?>
      </div>
      
    </div>
   <!--src="data:image/png;base64,iVBrkJggg==" alt="Base 64 encoded!" -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span id="ab" class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<h4><?php echo $row['name'] ?> &nbsp; Rs. <?php echo $row['price'] ?>/-<br>
Offer: <?php 
if($row['offer']!="")
echo $row['offer'] ?></h4>
  </div>

</div>
<div class="rightc">
  <h2>Description<br></h2>
    <div class="desc">
      <?php echo $row['description'] ?><br><br><br>
      <?php 
if($row['choices']!="")
  echo $row['choices'] ?>
<br>
<br>
<form method="post" action="cart.php?id= <?php echo $id ?>">
Quantity: <input type="number" default="1" name="qty" id="qty"/>
<br>
<br>
<?php 
}
?>
<div>
 <input type="submit" name="c" id="c" class="btn btn-primary" value="Add to Cart" ></form>
 <form action="wishlist.php?id= <?php echo $id ?>" method="post"> 
  <input type="submit" name="w" id="w" style="margin-left:120px;margin-top:-35px;" class="btn btn-primary" value="Add to Wishlist">
</form>
 </div>

</div>
  </div>
<h2>Rating</h2>
<?php
while($row2=mysqli_fetch_assoc($data2))
{?>
<h4>Stars <?php echo $row2['rating'] ?></h4>
Rating and Comment:</h4>
<?php echo $row2['date'] ?><br>
<?php echo $row2['comment'] ?><br>
<?php 
}
?>
<div>
  <form action="review.php?id=<?php echo $id ?>" method="post">
    <br>
    <input type="number" name="rate" placeholder="Give no of rating stars"><br><br>
    <textarea name="ta" placeholder="Enter your comment!" rows="5" cols="70" id="TA"></textarea> <br><br>
   <input type="submit" name="r" id="r" class="btn btn-primary" value="Give Review"><br><br>
 </form>
 </div>
<br>
<br>
<!--<div id="first">
  <div class="row">
  <div class="col-lg-3">
 <div class="card colo-md-4" style="width:250px;" >
  <img class="card-img-top" src="image/1.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>T-Shirts</b></h4>
    <p class="card-text">Casual daily wear T-shirts</p>
    <p><b>Rs. 1119/-</b></p><br>
    <a href="houses.php" class="btn btn-primary">See Details</a></center><br>
  </div>
</div>
<br>
</div>
<div class="col-lg-3">
 <div class="card colo-md-4" style="width:250px;" >
  <img class="card-img-top" src="image/1.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>T-Shirts</b></h4>
    <p class="card-text">Casual daily wear T-shirts</p>
    <p><b>Rs. 1119/-</b></p><br>
    <a href="houses.php" class="btn btn-primary">See Details</a></center><br>
  </div>
</div>
<br>
</div>
<div class="col-lg-3">
 <div class="card colo-md-4" style="width:250px;" >
  <img class="card-img-top" src="image/1.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>T-Shirts</b></h4>
    <p class="card-text">Casual daily wear T-shirts</p>
    <p><b>Rs. 1119/-</b></p><br>
    <a href="houses.php" class="btn btn-primary">See Details</a></center><br>
  </div>
</div>
<br>
</div>
<div class="col-lg-3">
 <div class="card colo-md-4" style="width:250px;" >
  <img class="card-img-top" src="image/1.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>T-Shirts</b></h4>
    <p class="card-text">Casual daily wear T-shirts</p>
    <p><b>Rs. 1119/-</b></p><br>
    <a href="houses.php" class="btn btn-primary">See Details</a></center><br>
  </div>
</div>
<br>
</div>-->
  <div class="chat">
  <button id="bt" class="btn-success"><a style="color: white;text-decoration: none;" href="chat/index.html">Chat Here!</a></button>
  </div>
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
  <script type="text/javascript" src="js/product.js"></script>
</body>
</html>
