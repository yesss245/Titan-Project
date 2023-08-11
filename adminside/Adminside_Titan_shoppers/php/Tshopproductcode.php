<?php
	


	$imgfile =$_FILES['filetoupload']['name'];

	$gender = $_GET['ddlproduct_men_women_wear_id'];
	$productcategoryid = $_GET['ddlproduct_category_id'];
	$pname = $_GET['pname'];
	$rate = $_GET['rate'];
	$discription = $_GET['discription'];
	$size1 = $_GET['size1'];
	$size2 = $_GET['size2'];
	$size3 = $_GET['size3'];
	$size4 = $_GET['size4'];
	$size5 = $_GET['size5'];
	$size6 = $_GET['size6'];
	$color1 = $_GET['color1'];
	$color2 = $_GET['color2'];
	$color3 = $_GET['color3'];
	$color4 = $_GET['color4'];
	$color5 = $_GET['color5'];
	$color6 = $_GET['color6'];
	$height1 = $_GET['height1'];
	$height2 = $_GET['height2'];
	$height3 = $_GET['height3'];
	$height4 = $_GET['height4'];
	$height5 = $_GET['height5'];
	$height6 = $_GET['height6'];
	

	if (!empty($pname) && 
		!empty($rate)) 
		{
			
		if (move_uploaded_file($_FILES['filetoupload']['tmp_name'],"php/Photoes/".$_FILES['filetoupload']['name'])) 
			{

		$conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
		$sql="INSERT INTO shopproduct
				(img,
					gender,
					product_category_id,
				productname,
				rate,
				discription,
				size1,size2,size3,size4,size5,size6,
				color1,color2,color3,color4,color5,color6,
				height1,height2,height3,height4,height5,height6) 
				values
				('$imgfile',
				'$gender',	
				'$productcategoryid',
				'$pname',
				'$rate',
				'$discription',
				'$size1','$size2','$size3','$size4','$size5','$size6',
				'$color1','$color2','$color3','$color4','$color5','$color6',
				'$height1','$height2','$height3','$height4','$height5','$height6')";
	
		if (mysqli_query($conn,$sql)) 
		{
			header("location:http://localhost/Project/Titan%20my/shop_product.php");	
			//echo "inserat data successfull";
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