<?php
session_start();
include("connection.php");

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$cnfpass=$_POST['cnfpass'];
$password=password_hash($pass, PASSWORD_BCRYPT);
$cpassword=password_hash($cnfpass, PASSWORD_BCRYPT);

$emailq="select * from user where email='$email'";
$query=mysqli_query($conn,$emailq);
$data=mysqli_fetch_assoc($query);
$id=$data['id'];

$num1=mysqli_num_rows($query);
if($num1>0)
{
	echo "<script type='text/javascript'>alert('Email already exists')
	window.location.href='signup.html';</script>";
}
$phoneq="select * from user where phone='$phone'";
$query=mysqli_query($conn,$phoneq);
$num2=mysqli_num_rows($query);
if($num2>0)
{
	echo "<script type='text/javascript'>alert('Phone No already exists')
	window.location.href='signup.html';</script>";
}

$sql="insert into user(name,password,email,phone) values('$name','$password','$email','$phone')";
$query=mysqli_query($conn,$sql);
        if($query)

			{
				$_SESSION['uname']=$name;
				$_SESSION['uid']=$id;
				header('location:home.php');
	        }
		else
			{
				echo "<script type='text/javascript'>alert('Sign up unsuccessful')
                </script>";
    }
}
?>