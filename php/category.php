<?php
include("connection.php");

$catname=$_GET['cat'];

$query="select * from product where cat='$catname'";
$data=mysqli_query($conn,$query);


$query2="select distinct subcat from product where cat='$catname'";
$data2=mysqli_query($conn,$query2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopping Categories</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="css/dress.css?v=<?php echo time(); ?>">
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
 <div id="first">
<h1> Fashion Categories</h1><br>
<div class="row">
  <div class="col-lg-3">
 <div class="card-deck colo-md-4" style="width:250px;" >
  <img class="card-img-top" src="image/1.jpg" alt="Card image" style="width:250px;border-radius: 100%;">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Clothing</b></h4>
    <a href="category.php?cat=clothing" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
</div>
  <div class="col-lg-3">
<div class="card-deck colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/2.jpg" alt="Card image" style="width:250px;border-radius: 100%;">
  <div class="card-body"><center>
      <h4 class="card-title"><b>Accessories</b></h4>
    <a href="category.php?cat=access" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
</div>
  <div class="col-lg-3">
<div class="card-deck colo-md-4" style="width:250px">
  <img class="card-img-top" src="image/13.png" alt="Card image" style="width:250px;border-radius: 100%;">
  <div class="card-body">
    <center><h4 class="card-title"><b>Shoes</b></h4>
    <a href="category.php?cat=shoes" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
</div>
 <div class="col-lg-3" >
 <div class="card-deck colo-md-4" style="width:250px" >
  <img class="card-img-top" src="image/4.jpg" alt="Card image" style="width:250px;border-radius:100%;">
  <div class="card-body"><center>
    <h4 class="card-title"><b>Miscellaneous</b></h4>
    <a href="category.php?cat=miscellaneous" class="btn btn-primary">See More</a></center><br>
  </div>
</div>
</div>
</div>
<hr>
<div class="row">
	<?php
while($row2=mysqli_fetch_assoc($data2))
{
$sub=$row2['subcat'];
$query3="select image from product_pic pp inner join product p on pp.prod_id=p.id where subcat='$sub'";
$data3=mysqli_query($conn,$query3);
$res=mysqli_fetch_array($data3);
	?>
<div class="col-lg-3">
	<?php echo '<img src="data:Sqlimage/jpeg;base64,'.base64_encode( $res['image'] ).'"style="width:250px;border-radius: 100%;height:200px;""/>'; ?>
<map name="workmap">
  <area shape="circle" coords="337,300,44" alt="" href="">
</map>
<a class="an" href="category.php?cat=$catname"> <?php echo $row2['subcat'] ?> </a><br>
</div>
<?php
}
?>
</div>
<br>
<br>
<div class="container">
<div class="row">
	<?php
while($row=mysqli_fetch_assoc($data))
{
$id=$row['id'];
$queryn="select image from product_pic where prod_id='$id'";
$datan=mysqli_query($conn,$queryn);
$resn=mysqli_fetch_array($datan);
?>
  <div class="col-lg-3">
 <div class="card colo-md-4" style="width:250px;" >
 	 <?php echo '<img src="data:Sqlimage/jpeg;base64,'.base64_encode( $resn['image'] ).'"style="width:250px;height:200px;""/>'; 	  ?>
  
  <div class="card-body"><center>
    <h4 class="card-title"><b><?php echo $row['name']; ?></b></h4>
    <p class="card-text"><?php echo $row['description']; ?></p>
    <p><b>Rs. <?php echo $row['price']; ?>/-</b></p><br>
    <a href="product.php?id= <?php echo $id ?>" class="btn btn-primary">See Details</a></center><br>
  </div>
</div>
<br>
<br>
<br>
<br>
</div>
<?php
}
?>
</div>

<div class="chat">
  <button id="bt" class="btn-success">Chat Here!</button>
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
