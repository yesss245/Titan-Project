<?php

session_start();

$productwear = $_POST['ptitle'];

if (!empty($productwear))
	
	{

$conn =mysqli_connect("localhost","root","","titanshoppers");
$sql ="INSERT INTO product_men_women_id(Type) values('$productwear')";

	if (mysqli_query($conn,$sql)) 
	{
		$_SESSION['product_wear'] = "Product_Men/Women wear(".$productwear.") insert Successfully !!!";
		header("location:http://localhost/Project/Titan%20my/Product_men_women_id.php");
		//echo "Successfully";
		
	}
	else
	{	

		echo mysqli_error($conn);
	}

	}



?>