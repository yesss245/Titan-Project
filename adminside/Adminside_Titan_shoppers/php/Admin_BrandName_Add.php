<?php

session_start();

$brandname = $_POST['brandname'];

if (!empty($brandname))
	
	{

$conn =mysqli_connect("localhost","root","","titanshoppers");
$sql ="INSERT INTO brand_name(Brand_Name) values('$brandname')";

	if (mysqli_query($conn,$sql)) 
	{
		$_SESSION['brandnameadd'] = "(".$brandname.") insert Successfully !!!";
		header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Add_product.php");
		
	}
	else
	{	

		echo mysqli_error($conn);
	}

	}



?>