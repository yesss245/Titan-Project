<?php

	$activat=$_POST['Activat'];
	$banner_id=$_POST['Banners_id'];

	$conn=mysqli_connect("localhost","root","","titanshoppers");
	$sql="UPDATE `shope_banners` SET `Status` = '$activat' WHERE `shope_banners`.`No` = '$banner_id' ";

	if (mysqli_query($conn,$sql)) 
							{
								header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Logo_banners.php");
							}
							else
							{
								header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/index.php");

							}

?>