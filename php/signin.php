<?php
session_start();
include("connection.php");

if(isset($_POST['submit']))
{
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $pass=mysqli_real_escape_string($conn,$_POST['pass']);

  $sql="select * from user where email='$email' limit 1";
  $query=mysqli_query($conn,$sql);
  $data=mysqli_fetch_assoc($query);
$id=$data['id'];

  if(mysqli_num_rows($query)==1)
  {
  	$sql2="select password from user where email='$email' limit 1";
  	$query2=mysqli_query($conn,$sql2);
  	$data=mysqli_fetch_assoc($query2);
  	$hash=$data['password'];
    $pass_decode= password_verify($pass,$hash);
    if($pass_decode)
    {
         $sql2="select name from user where email='$email' limit 1";
         $query2=mysqli_query($conn,$sql2);
  	     $data2=mysqli_fetch_assoc($query2);
         $name=$data2['name'];
         $_SESSION['uname']=$name;
         $_SESSION['uid']=$id;
         header('location:home.php');
    }
    else
    {
    	echo "<script type='text/javascript'>alert('You Have Entered Incorrect Password! Login Failed')
        window.location.href='signin.html';
        </script>";
    }
  }
  else
  {
  	echo "<script type='text/javascript'>alert('You Have Entered Incorrect Email Address! Login Failed')
        window.location.href='signin.html';
        </script>";
  }
}

?>