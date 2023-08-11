<?php

$e=$_POST['email'];
$ph=$_POST['Phone_no'];
$u=$_POST['username'];
$p=$_POST['password'];
$rp=$_POST['re_password'];


$conn=mysqli_connect("localhost","root","","titanshoppers");
$sql="INSERT INTO login(Email,Phoneno,Username,Password,re_password) values('$e','$ph','$u','$p','$rp')";

if (mysqli_query($conn,$sql)) 
{
	echo ("successfuly!!!");
}
else{
	echo mysqli_error($conn);
}


?>