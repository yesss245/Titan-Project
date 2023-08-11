<?php
	
	session_start();

	
	$banner_img=$_FILES['shop_banners']['name'];
	$main_head=$_POST['main_head'];
	$message=$_POST['message'];
	



	if (!empty($main_head) && 
		!empty($message)) 
		{
			
		if (move_uploaded_file($_FILES['shop_banners']['tmp_name'], "Photoes/Shop_Banners/".$_FILES['shop_banners']['name'])) 
			{

		$conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
		$sql="Insert into shope_banners(img_Banners,
									  Status,
									Big_hedline,
									Sub_message
								) values
								('$banner_img',
								'1',
								'$main_head',
								'$message'
							)";
	
		if (mysqli_query($conn,$sql)) 
		{
			
			//echo "inserat data successfull";
			header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Logo_banners.php");
		}
		else
		{
			echo mysqli_error($conn);
		}

		}
		else
		{
			echo $_FILES['shop_banners']['error'];
		}
	}
?>