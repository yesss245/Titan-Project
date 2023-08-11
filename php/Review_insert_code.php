<?php


$name=$_POST['name'];
$P_id=$_POST['P_id'];
$Rating=$_POST['Rating'];
$email=$_POST['email'];
$Review=$_POST['Review'];
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$time=date('d-m-Y - H:i');



 $conn = mysqli_connect('localhost','root','','titanshoppers') or die('connection failed');
 $sql="INSERT INTO `rating`(`Product_id`, `Name`, `Email`, `Review`, `Rating_number`, `Date_time`) VALUES ('$P_id','$name','$email','$Review','$Rating','$time')";
 if (mysqli_query($conn,$sql)) 
		{
		

			
		}
		else
		{
			echo mysqli_error($conn);
		}



?>