<?php
session_start();
include("connection.php");

if(isset($_POST['c']))
{
$userid=$_SESSION['uid'];
$prodid=$_GET['id'];
$query="select * from product where id='$prodid'";
$data=mysqli_query($conn,$query);
$res=mysqli_fetch_assoc($data);
$ppu=$res['price'];
$qty=$_POST['qty'];
$tp=$qty * $ppu;
$query2="insert into cart(userid,prod_id,price_per_unit,qty,total_price) values('$userid','$prodid','$ppu','$qty','$tp')";
$data2=mysqli_query($conn,$query2);


if($data2)
{
	echo "<script type='text/javascript'>alert('Your Product is added to the Cart,Thank you!!');
        </script>";
        //header('location: product2.php?id='.$prodid);
}
else
{
	   echo "<script type='text/javascript'>alert('Could not add product to the cart');
        </script>";
        //header('location: product2.php?id='.$prodid);
}

}

?>
