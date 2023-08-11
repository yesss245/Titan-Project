<?php
	
	session_start();

	
	$pro_img=$_FILES['filetoupload']['name'];
	$count = count($pro_img);
	//$file_name=$pName;
	$gender=$_POST['ddlproduct_men_women_wear_id'];
	$productcategoryid=$_POST['ddlproduct_category_id'];
	$ddlproduct_brand=$_POST['ddlproduct_brand'];
	$exclusiveproduct=$_POST['exclusivep'];
	$pName=$_POST['pname'];
	$Rate=$_POST['rate'];
	$Discount=$_POST['Discount'];
	$frate=$_POST['frate'];
	$Discription=$_POST['discription'];
	$Size1=$_POST['size1'];
	$Size2=$_POST['size2'];
	$Size3=$_POST['size3'];
	$Size4=$_POST['size4'];
	$Size5=$_POST['size5'];
	$Size6=$_POST['size6'];
	$Color1=$_POST['color1'];
	$Color2=$_POST['color2'];
	$Color3=$_POST['color3'];
	$Color4=$_POST['color4'];
	$Color5=$_POST['color5'];
	$Color6=$_POST['color6'];
	$Height1=$_POST['height1'];
	$Height2=$_POST['height2'];
	$Height3=$_POST['height3'];
	$Height4=$_POST['height4'];
	$Height5=$_POST['height5'];
	$Height6=$_POST['height6'];

	print_r($pro_img);

	if (!empty($pName) && 
		!empty($Rate)) 
		{

			for ($i = 0; $i < $count; $i++) {
				$pro_imgs = $pro_img[$i]; 
				if ($pro_imgs ) {
				move_uploaded_file($_FILES['filetoupload']['tmp_name'][$i], "Photoes/".$pName.$pro_imgs);
				//$pro_img[i]="Photoes/.$pName.$pro_imgs";
				} else {
				echo $_FILES['filetoupload']['error'][$i];
				}
			}

		$imgJson=json_encode($pro_img);
		//if (move_uploaded_file($_FILES['filetoupload']['tmp_name'], "Photoes/".$pName.$_FILES['filetoupload']['name'])){

		$conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
		$sql="Insert into shopproduct(img,
									  gender,
									productcategoryid,
									Brand,
									exclusive_product,
									productname,
									rate,
									Discount,
									F_rate,
									discription,
									size1,size2,size3,size4,size5,size6,
									color1,color2,color3,color4,color5,color6,
									height1,height2,height3,height4,height5,height6
								) values
								(
								'$imgJson',
								'$gender',
								'$productcategoryid',
								'$ddlproduct_brand',
								'$exclusiveproduct',
								'$pName',
								'$Rate',
								'$Discount',
								'$frate',
								'$Discription',
								'$Size1','$Size2','$Size3','$Size4','$Size5','$Size6',
								'$Color1','$Color2','$Color3','$Color4','$Color5','$Color6',
								'$Height1','$Height2','$Height3','$Height4','$Height5','$Height6'
							)";
	
		if (mysqli_query($conn,$sql)) 
		{
			//header("location:catgrid.php");	
			//echo "inserat data successfull";
			$_SESSION['shopproduct'] = "shopproduct(".$pName.")Insert successfull!!!";	
			//echo "inserat data successfull";
			header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Add_product.php");
		}
		else
		{
			echo mysqli_error($conn);
		}

		// }
		// else
		// {
		// 	echo $_FILES['filetoupload']['error'];
		// }
	}

?>