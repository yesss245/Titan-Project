<?php
session_start();

	
	$username=$_GET['username'];
	$password=$_GET['password'];

	$conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
	$sql="SELECT * FROM login WHERE ( Email='$username' or Phoneno='$username' or Username='$username') and Password='$password'";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) 
	{
		$_SESSION['username']=$_GET['username'];
		$_SESSION['login'] = "Login Successfully !!!";
		header("location:login&ragister.php");
		//echo "succcccc!!!!";
	}
	else
	{
		
		echo mysqli_error($conn);
	}


?>