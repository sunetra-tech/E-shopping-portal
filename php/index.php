<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopping Portal</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
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
        <li class="active"><a href="index.php">Home</a></li>
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
        <li><a href="aboutUs.html">About Us</a></li>
        <li><a href="support.html">Support Page</a></li>
        <li><a href="search.php"><span class="glyphicon glyphicon-search"></span> Search</a>
          </li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signin.html"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        
      </ul>
    </div>
  </div>
</nav>
  
  <div class="top">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/9.jpg" alt="" style="width:100%;height:400px;">
      </div>

      <div class="item">
        <img src="image/10.jpg" alt="" style="width:100%;height:400px;">
      </div>
      <div class="item">
        <img src="image/8.jpg" alt="" style="width:100%;height:400px;">
      </div>
    </div>

    <!-- Left and right controls
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>-->
  </div>
</div>
  </div>
<div id="first">
  <br>
<h1> Fashion Categories</h1><br>
<div class="row">
  <div class="col-lg-3">
 <div class="card-deck colo-md-4" style="width:250px;" >
  <img class="card-img-top" src="image/1.jpg" alt="Card image" style="width:250px;border-radius: 100%;">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Clothing</b></h4>
    <a href="#cloth" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card-deck colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/2.jpg" alt="Card image" style="width:250px;border-radius: 100%;">
  <div class="card-body"><center>
      <h4 class="card-title"><b>Accessories</b></h4>
    <a href="#access" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card-deck colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/13.png" alt="Card image" style="width:250px;border-radius: 100%;">
  <div class="card-body">
    <center><h4 class="card-title"><b>Shoes</b></h4>
    <a href="#shoes" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
 <div class="col-lg-3" >
 <div class="card-deck colo-md-4" style="width:250px" >
  <img class="card-img-top" src="image/4.jpg" alt="Card image" style="width:250px;border-radius: 100%;">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Miscellaneous</b></h4>
    <a href="#miss" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
</div>
<hr>
</div>
<div class="container">

<h1 id="cloth"> <a href="category.php?cat=clothing"> Clothing </a></h1><br>
<div class="row">
  <div class="col-lg-3">
 <div class="card colo-md-4" style="width:250px;" >
  <img class="card-img-top" src="image/bridal.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Bridal</b></h4>
    <a href="subcat.php?cat=clothing&subcat=bridal" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
<div class="col-lg-3" >
 <div class="card colo-md-4" style="width:250px" >
  <img class="card-img-top" src="image/ethnic.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Ethnic</b></h4>
    <a href="subcat.php?cat=clothing&subcat=ethnic" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/casual.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
      <h4 class="card-title"><b>Casuals</b></h4>
    <a href="subcat.php?cat=clothing&subcat=casual" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/formal.jpg" alt="Card image" style="width:250px">
  <div class="card-body">
    <center><h4 class="card-title"><b>Formal</b></h4>
    <a href="subcat.php?cat=clothing&subcat=formal" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
</div>

<h1 id="women"> <a href="category.php?cat=women"> Women Fashion</a></h1><br>
<div class="row">
  <div class="col-lg-3">
 <div class="card colo-md-4" style="width:250px;" >
  <img class="card-img-top" src="image/tshirtw.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>T-Shirts</b></h4>
    <a href="subcat.php?cat=women&subcat=tshirt" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/kurtaw.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
      <h4 class="card-title"><b>Kurtas</b></h4>
    <a href="subcat.php?cat=women&subcat=kurta" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/pantw.jpg" alt="Card image" style="width:250px">
  <div class="card-body">
    <center><h4 class="card-title"><b>Pants</b></h4>
    <a href="subcat.php?cat=women&subcat=pant" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
 <div class="col-lg-3" >
 <div class="card colo-md-4" style="width:250px" >
  <img class="card-img-top" src="image/saree.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Saree</b></h4>
    <a href="subcat.php?cat=women&subcat=saree" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
</div>


<!--
<div class="col-lg-3" >
 <div class="card colo-md-4" style="width:250px" >
  <img class="card-img-top" src="image/4.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Booking</b></h4>
    <p class="card-text">This page contains the details of all Bookings.</p><br>
    <a href="booking.php" class="btn btn-primary">See Details</a></center><br>
  </div>
</div>
<br>
</div>

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
-->
<hr>
<h1 id="men"> <a href="category.php?cat=men"> Men Fashion</a></h1><br>
<div class="row">
  <div class="col-lg-3">
 <div class="card colo-md-4" style="width:250px;" >
  <img class="card-img-top" src="image/tshirtm.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>T-Shirts</b></h4>
    <a href="subcat.php?cat=men&subcat=tshirt" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/kurtam.jpeg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
      <h4 class="card-title"><b>Kurtas</b></h4>
    <a href="subcat.php?cat=men&subcat=kurta" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/pantm.jpg" alt="Card image" style="width:250px">
  <div class="card-body">
    <center><h4 class="card-title"><b>Pants</b></h4>
    <a href="subcat.php?cat=men&subcat=pant" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
 <div class="col-lg-3" >
 <div class="card colo-md-4" style="width:250px" >
  <img class="card-img-top" src="image/shirt.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Shirts</b></h4>
    <a href="subcat.php?cat=men&subcat=shirt" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
</div>
<hr>

<h1 id="kids"> <a href="category.php?cat=kids"> Kids Fashion</a></h1><br>
<div class="row">
  <div class="col-lg-3">
 <div class="card colo-md-4" style="width:250px;" >
  <img class="card-img-top" src="image/kid.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>T-Shirts</b></h4>
    <a href="subcat.php?cat=kids&subcat=tshirt" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/kurtak.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
      <h4 class="card-title"><b>Kurtas</b></h4>
    <a href="subcat.php?cat=kids&subcat=kurta" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/kidp.jpg" alt="Card image" style="width:250px">
  <div class="card-body">
    <center><h4 class="card-title"><b>Pants</b></h4>
    <a href="subcat.php?cat=kids&subcat=pant" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
 <div class="col-lg-3" >
 <div class="card colo-md-4" style="width:250px" >
  <img class="card-img-top" src="image/frock.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Frock</b></h4>
    <a href="subcat.php?cat=kids&subcat=frock" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
</div>
<hr>

<h1 id="access">  <a href="category.php?cat=access">Accessories</a></h1><br>
<div class="row">
  <div class="col-lg-3">
 <div class="card colo-md-4" style="width:250px;" >
  <img class="card-img-top" src="image/watch.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Watches</b></h4>
    <a href="subcat.php?cat=access&subcat=watch" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/ring.jpeg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
      <h4 class="card-title"><b>Ear-rings</b></h4>
    <a href="subcat.php?cat=access&subcat=ear-ring" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/jw.jpg" alt="Card image" style="width:250px">
  <div class="card-body">
    <center><h4 class="card-title"><b>Jewellery</b></h4>
    <a href="subcat.php?cat=access&subcat=jewellery" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
 <div class="col-lg-3" >
 <div class="card colo-md-4" style="width:250px" >
  <img class="card-img-top" src="image/glass.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Glasses</b></h4>
    <a href="subcat.php?cat=access&subcat=glass" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
</div>
<hr>

<h1 id="shoes"> <a href="category.php?cat=shoes">Shoes</a></h1><br>
<div class="row">
  <div class="col-lg-3">
 <div class="card colo-md-4" style="width:250px;" >
  <img class="card-img-top" src="image/heels.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Heels</b></h4>
    <a href="subcat.php?cat=shoes&subcat=heels" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/boot.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
      <h4 class="card-title"><b>Boots</b></h4>
    <a href="subcat.php?cat=shoes&subcat=boots" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/shoes.jpg" alt="Card image" style="width:250px">
  <div class="card-body">
    <center><h4 class="card-title"><b>Shoes</b></h4>
    <a href="subcat.php?cat=shoes&subcat=shoes" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
 <div class="col-lg-3" >
 <div class="card colo-md-4" style="width:250px" >
  <img class="card-img-top" src="image/snik.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Snickers</b></h4>
    <a href="subcat.php?cat=shoes&subcat=snickers" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
</div>
<hr>

<h1 id="miss">  <a href="category.php?cat=miscellaneous">Miscellaneous</a></h1><br>
<div class="row">
  <div class="col-lg-3">
 <div class="card colo-md-4" style="width:250px;" >
  <img class="card-img-top" src="image/pen.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Pen</b></h4>
    <a href="subcat.php?cat=miscellaneous&subcat=pen" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/head.jpg" alt="Card image" style="width:250px">
  <div class="card-body"><center>
      <h4 class="card-title"><b>Headphones</b></h4>
    <a href="subcat.php?cat=miscellaneous&subcat=headphone" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
  <div class="col-lg-3">
<div class="card colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/novel.jpg" alt="Card image" style="width:250px">
  <div class="card-body">
    <center><h4 class="card-title"><b>Novels</b></h4>
    <a href="subcat.php?cat=miscellaneous&subcat=novel" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
 <div class="col-lg-3" >
 <div class="card colo-md-4" style="width:250px" >
  <img class="card-img-top" src="image/bed.png" alt="Card image" style="width:250px">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Bed-Sheets</b></h4>
    <a href="subcat.php?cat=miscellaneous&subcat=bedsheets" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
<br>
</div>
<div class="chat">
  <button id="bt" class="btn-success">Chat Here!</button>
  </div>
</div>
<hr>
</div>
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
