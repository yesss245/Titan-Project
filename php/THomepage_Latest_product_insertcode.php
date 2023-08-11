<?php
session_start();
	
	$pro_img=$_FILES['filetoupload']['name'];
	$gender=$_POST['ddlproduct_men_women_wear_id'];
	$productcategoryid=$_POST['ddlproduct_category_id'];
	$ptitle=$_POST['ptitle'];
	
	



	if (!empty($ptitle)) 
		{
			
		if (move_uploaded_file($_FILES['filetoupload']['tmp_name'],"Photoes/leatest/".$_FILES['filetoupload']['name'])) 
			{

		$conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
		$sql="Insert into latestproduct (productimg,
									  gender,
									productcategoryid,
									producttitle
								) values
								('$pro_img',
								'$gender',
								'$productcategoryid',
								'$ptitle'
								)";
	
		if (mysqli_query($conn,$sql)) 
		{
			//header("location:catgrid.php");
			$_SESSION['Latest'] = "Latest product (".$ptitle.") insert Successfully !!!";	
			header("location:http://localhost/Titan-Project/Homepage_Latest_product_insert.php");
		}
		else
		{
			
			echo mysqli_error($conn);
		}

		}
		else
		{
			echo $_FILES['filetoupload']['error'];
		}
	}
?>