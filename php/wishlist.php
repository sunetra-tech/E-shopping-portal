<?php
session_start();
include("connection.php");

if(isset($_POST['w']))
{
$userid=$_SESSION['uid'];
$prodid=$_GET['id'];
$query="insert into wishlist(id,prod_id) values ('$userid','$prodid')";
$data=mysqli_query($conn,$query);

if($data)
{
	echo "<script type='text/javascript'>alert('Your Product is added to the Wishlist,Thank you!!');
        </script>";
        header('location: product2.php?id='.$prodid);
}
else
{
	   echo "<script type='text/javascript'>alert('Could not add product to the wishlist(Seems to be already added');
        </script>";
        header('location: product2.php?id='.$prodid);
}

}
?>
