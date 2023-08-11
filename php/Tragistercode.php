<?php

session_start();
$name=$_GET['name']
$email=$_GET['email'];
$Phone_no=$_GET['Phone_no'];
$username=$_GET['username'];
$password=$_GET['password'];
$re_password=$_GET['re_password'];

if (!empty($email) &&
	!empty($Phone_no) &&
	!empty($username) &&
	!empty($password) &&
	!empty($re_password))
	
	{

$conn =mysqli_connect("localhost","root","","titanshoppers");
$sql ="INSERT INTO login(Fname,Email,Phoneno,Username,Password,re_password) values('$name','$email','$Phone_no','$username','$password','$re_password')";

	if (mysqli_query($conn,$sql)) 
	{
		$_SESSION['ragis'] = "Ragistration Successfully !!!";
		header("location:login&ragister.php");
	}
	else
	{	

		echo mysqli_error($conn);
	}

	}



?>