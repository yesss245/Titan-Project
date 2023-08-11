<?php

	$activat=$_POST['Activat'];
	$social_id=$_POST['social_id'];
	$Facebook=$_POST['Facebook'];
	$Twitter=$_POST['Twitter'];
	$Instagram=$_POST['Instagram'];

	$conn=mysqli_connect("localhost","root","","titanshoppers");
	$sql="UPDATE `social_links` SET `Facebook`='$Facebook',`Twitter`='$Twitter',`Instagram`='$Instagram',`Status`='$activat' WHERE No = '$social_id'";

	if (mysqli_query($conn,$sql)) 
							{
								header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Social_link.php");
							}
							else
							{
								header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/index.php");

							}

?>