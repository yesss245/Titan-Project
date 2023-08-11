<?php

session_start();

$productname = $_POST['ptitle'];

if (!empty($productname))
	
	{

$conn =mysqli_connect("localhost","root","","titanshoppers");
$sql ="INSERT INTO product_category_id(product_title) values('$productname')";

	if (mysqli_query($conn,$sql)) 
	{
		$_SESSION['product_category'] = "Product_Category(".$productname.") insert Successfully !!!";
		header("location:http://localhost/Project/Titan%20my/All_Product_Categody(id).php");
		
	}
	else
	{	

		echo mysqli_error($conn);
	}

	}



?>