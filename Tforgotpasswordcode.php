<?php
	
	$conn = mysqli_connect("localhost","root","","titanshoppers");
	if (isset($_POST["email"]) && !empty($_POST["email"])) {
		$email = $_POST['email'];
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		$email = filter_var($email, FILTER_VALIDATE_EMAIL);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$sql = "SELECT * FROM login WHERE Email = '" . $email ."'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);
		if ($count == 1) {
			$run = mysqli_fetch_assoc($result);
			$password = $run['Password'];
			$to = $run['$email'];
			$subject = "Your Recovered Password";
			$message = "Please use this password to loign" .$password.;

			$sender = "From: kananiyash731@gmail.com";
			if (mail($to,$subject,$message,$sender)) {
				echo "Your Password has been sent to your email id";
			}
			else{
				echo "Failed to Recover your password, try again";
			}
		}
		else{
			echo "Email does not exist in database";
		}
	}
?>
	







<?php
	
//	$conn = mysqli_connect("localhost","root","","titanshoppers");
//	if (isset($_POST) & !empty($_POST)) {
//		$email = mysqli_real_escape_string($conn, $_POST['email']);
//		$sql = "SELECT * FROM shopproduct WHERE Email = '$email'";
//		$result = mysqli_query($conn, $sql);
//		$count = mysqli_num_rows($result);
//		if ($count == 1) {
//			echo "send eamil to user with password";
//		}else{
//			echo "user name does not exist";
//////		}
//	}
//?>	