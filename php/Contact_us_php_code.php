<?php


$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$time=date('d-m-Y - H:i:s');



 $conn = mysqli_connect('localhost','root','','titanshoppers') or die('connection failed');
 $sql="INSERT INTO `contact_us`(`Name`, `Email_id`, `message`, `Date_Time`) VALUES ('$name','$email','$message','$time')";
 if (mysqli_query($conn,$sql)) 
		{
			
			
			echo "
					<div class='row' style='margin-top:5px;'>                     
		                    <div class='alert alert-success' align='center' role='alert'><h6 style='align-items: center; justify-content: center; display: flex;'><strong>Hey!</strong>Mail Sent Successfully!!!!</h6></div>
		            </div>
			";

			
		}
		else
		{
			echo mysqli_error($conn);
		}



?>