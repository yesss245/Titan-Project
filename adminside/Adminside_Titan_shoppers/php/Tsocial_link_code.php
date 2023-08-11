<?php
	
	
	$Facebook=$_POST['Facebook'];
	$Twitter=$_POST['Twitter'];
	$Instagram=$_POST['Instagram'];

	
			
	

		$conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
		$sql="INSERT INTO `social_links`(`Facebook`, `Twitter`, `Instagram`, `Status`) VALUES ('$Facebook','$Twitter','$Instagram','1')";
	
		if (mysqli_query($conn,$sql)) 
		{
			header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Social_link.php");	
			//echo "inserat data successfull";
		}
		else
		{
			echo mysqli_error($conn);
		}

		
	
?>