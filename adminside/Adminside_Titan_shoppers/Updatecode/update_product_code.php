<?php

	   $update_id = $_GET['update_id'];
	   $update_gender = $_GET['update_gender'];
	   $update_productcategoryid = $_GET['update_category'];
	   $update_Brand = $_GET['update_Brand'];
	   $update_exp = $_GET['update_exclusivep'];
	   $update_productname = $_GET['update_pname'];
	   $update_rate = $_GET['update_rate'];
	   $update_d_rate = $_GET['update_d_rate'];
	   $update_f_rate = $_GET['update_f_rate'];
	   $update_discription = $_GET['update_discription'];
	   $update_size1 = $_GET['update_size1'];
	   $update_size2 = $_GET['update_size2'];
	   $update_size3 = $_GET['update_size3'];
	   $update_size4 = $_GET['update_size4'];
	   $update_size5 = $_GET['update_size5'];
	   $update_size6 = $_GET['update_size6'];
	   $update_color1 = $_GET['update_color1'];
	   $update_color2 = $_GET['update_color2'];
	   $update_color3 = $_GET['update_color3'];
	   $update_color4 = $_GET['update_color4'];
	   $update_color5 = $_GET['update_color5'];
	   $update_color6 = $_GET['update_color6'];
	   $update_height1 = $_GET['update_height1'];
	   $update_height2 = $_GET['update_height2'];
	   $update_height3 = $_GET['update_height3'];
	   $update_height4 = $_GET['update_height4'];
	   $update_height5 = $_GET['update_height5'];
	   $update_height6 = $_GET['update_height6'];

	   $conn=mysqli_connect("localhost","root","","titanshoppers");
	   $sql="UPDATE shopproduct SET
	   					gender = '$update_gender',
                        productcategoryid = '$update_productcategoryid',
                        Brand = '$update_Brand',
                        exclusive_product = '$update_exp',
                        productname = '$update_productname',
                        rate = '$update_rate',
                        Discount= '$update_d_rate',
                        F_rate = '$update_f_rate',
                        discription = '$update_discription',
                        size1 = '$update_size1',
                        size2 = '$update_size2',
                        size3 = '$update_size3',
                        size4 = '$update_size4',
                        size5 = '$update_size5',
                        size6 = '$update_size6',
                        color1 = '$update_color1',
                        color2 = '$update_color2',
                        color3 = '$update_color3',
                        color4 = '$update_color4',
                        color5 = '$update_color5',
                        color6 = '$update_color6',
                        height1 = '$update_height1',
                        height2 = '$update_height2',
                        height3 = '$update_height3',
                        height4 = '$update_height4',
                        height5 = '$update_height5',
                        height6 = '$update_height6' 
                        WHERE productid = '$update_id'";

                        if (mysqli_query($conn,$sql)) 
							{
								header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/All_product.php");
							}
							else
							{
								header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/index.php");

							}
									





?>