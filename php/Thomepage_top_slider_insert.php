<?php
session_start();
	
	$pro_img=$_FILES['filetoupload']['name'];
	$gender=$_POST['ddlproduct_men_women_wear_id'];
	$productcategoryid=$_POST['ddlproduct_category_id'];
	$Title=$_POST['title'];
	$Headline=$_POST['headline'];
	$Message=$_POST['message'];
	
	



	if (!empty($Title)) 
		{
			
		if (move_uploaded_file($_FILES['filetoupload']['tmp_name'],"Photoes/Banner/".$_FILES['filetoupload']['name'])) 
			{

		$conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
		$sql="Insert into homepage_top_slider (slider_img,
									  gender,
									productcategoryid,
									title,
									headline,
									message
								) values
								('$pro_img',
								'$gender',
								'$productcategoryid',
								'$Title',
								'$Headline',
								'$Message'
								)";
	
		if (mysqli_query($conn,$sql)) 
		{
			//header("location:catgrid.php");
			$_SESSION['slider'] = "Slider Banner (".$Title.") insert Successfully !!!";	
			echo "inserat data successfull";
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