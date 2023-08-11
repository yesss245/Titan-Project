<?php

session_start();  

$user_name=$_SESSION['user_name'];

	if ($_SERVER["REQUEST_METHOD"]=="POST") 
	{
		if (isset($_POST['Add_to_cart'])) 
		{
			if (isset($_SESSION['cart'])) 
			{
				$Myitem=array_column($_SESSION['cart'], 'Productname');
				if (in_array($_POST['Productname'],$Myitem)) 
				{
					$_SESSION['alredyadd'] = "Item Alredy add in cart !!!";
					header("location:http://localhost/Titan-Project/shop_product.php");
				}
				else{


				$count=count($_SESSION['cart']);
				$_SESSION['cart'][$count]=array('Productname'=>$_POST['Productname'],'Rate'=>$_POST['Rate'],'Quantity'=>1);
				$_SESSION['added'] = "Item added in cart !!!";
					header("location:http://localhost/Titan-Project/shop_product.php");
				
				}

			}
			else
			{
				$_SESSION['cart'][0]=array('Productname'=>$_POST['Productname'],'Rate'=>$_POST['Rate'],'Quantity'=>1);
				$_SESSION['add'] = "Item add in cart !!!";
					header("location:http://localhost/Titan-Project/shop_product.php");
				
			}
		}
		if (isset($_POST['remove_item'])) 
		{
			foreach($_SESSION['cart'] as $key => $value)	
			{
				if ($value['Productname']==$_POST['Productname']) 
				{
					unset($_SESSION['cart'][$key]);
					$_SESSION['cart']=array_values($_SESSION['cart']);
					$_SESSION['removee'] = "Item remove !!!";
					header("location:http://localhost/Titan-Project/mycart.php");
				}
				
			}
		}
		if (isset($_POST['mod_Quantity'])) 
		{
			foreach($_SESSION['cart'] as $key => $value)	
			{
				if ($value['Productname']==$_POST['Productname']) 
				{
					$_SESSION['cart'][$key]['Quantity']=$_POST['mod_Quantity'];
					
					header("location:http://localhost/Titan-Project/mycart.php");
				}
				
			}
		}


		
		
	}


?>
