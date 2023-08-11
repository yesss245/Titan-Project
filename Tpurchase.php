<?php
session_start();

$user_name=$_SESSION['user_name'];
$user_id=$_SESSION['user_id'];



$conn=mysqli_connect("localhost","root","","titanshoppers");

	if ($_SERVER["REQUEST_METHOD"]=="POST") 
	{
		if (isset($_POST['Purchase'])) 
		{
			date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$time=date('d-m-Y - H:i:s');
$odate=date('dmy');
			$orid=rand(1000000000,99999999999);
			$orderid='245'.$odate.$orid;
			$_SESSION['randomorderid']=$orderid;
			$oid=$_SESSION['randomorderid'];

			$sql1="INSERT INTO `order_user_info` (`Randomorderid`, `Order_date`, `FullName`, `Phone_no`, `House_no`, `Area`, `Landmark`, `Pincode`, `Town_city`, `State`, `Country`, `User_id`, `User_name`, `Payment_time_date`,`Payment_time`, `Status`,`Grand_total`) VALUES ('$oid','$time','$_POST[fullname]','$_POST[phoneno]','$_POST[house_no]','$_POST[area]','$_POST[landmark]','$_POST[pincode]','$_POST[city]','$_POST[state]','$_POST[country]','$user_id','$user_name','$time','None','Confirm','0')";
			if(mysqli_query($conn,$sql1))
			{
				$Randomorderid=mysqli_insert_id($conn);
				$sql2="INSERT INTO `user_order`(`Randomorderid`, `Product_Name`, `Price`, `Quantity`,`Total_Price`,`Gst`) VALUES (?,?,?,?,?,?)";
				$stmt=mysqli_prepare($conn,$sql2);		
				if ($stmt) 
				{
					mysqli_stmt_bind_param($stmt,"isiiii",$oid,$Productname,$price,$quantity,$totalprice,$gst);
					foreach($_SESSION['cart'] as $key => $values)
					{
						$Productname=$values['Productname'];
						$price=$values['Rate'];
						$quantity=$values['Quantity'];
						$totalprice=$values['Rate']*$values['Quantity'];
						$gst=$totalprice*5/100;
						
						mysqli_stmt_execute($stmt);

					}	
					//unset($_SESSION['cart']);
					header("location:Proceed_order.php");
					
				}
				else
				{
					echo "sql Query Prepare error";
				}
			}
			else{
				mysqli_error($conn);
			}
		}
		mysqli_error($conn);
	}



	
?>