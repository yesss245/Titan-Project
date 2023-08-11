<?php

	   $update_id = $_GET['update_id'];
	   $update_gender = $_GET['update_gender'];
	   $update_productcategoryid = $_GET['update_category'];
	   $update_productname = $_GET['update_pname'];
	   $update_image = $_FILES['update_image']['name'];
	   $update_image_size = $_FILES['update_image']['size'];
	   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
	   $update_image_folder = 'adminside/Adminside_Titan_shoppers/php/Photoes/leatest/'.$update_image;
	   

	   $conn=mysqli_connect("localhost","root","","titanshoppers");
	   $sql="UPDATE latestproduct SET
	   					gender = '$update_gender',
                        productcategoryid = '$update_productcategoryid',
                        producttitle = '$update_productname'
                        WHERE Id = '$update_id'";

                        if (mysqli_query($conn,$sql)) 
							{
								header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Latest_product_tabel.php");
							}
							else
							{
								header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/index.php");

							}

							
									





?>