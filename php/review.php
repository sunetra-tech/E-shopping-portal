<?php
session_start();
include("connection.php");

if(isset($_POST['r']))
{
	$pid=$_GET['id'];
	$r=$_POST['rate'];
	$c=$_POST['ta'];
	$id=$_SESSION['uid'];
	
	$query2="insert into review(prod_id,user_id,rating,comment) values ('$pid','$id','$r','$c')";
    $data2=mysqli_query($conn,$query2);

if($data2)
{
	echo "<script type='text/javascript'>alert('Thank you for you review!!');
        </script>";
        //header('location: product2.php?id='.$prodid);
}
else
{
	   echo "<script type='text/javascript'>alert('Could not submit your review!!');
        </script>";
        //header('location: product2.php?id='.$prodid);
}

}
?>