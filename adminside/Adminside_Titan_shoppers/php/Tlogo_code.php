<?php
	
	$logo_img=$_FILES['logo']['name'];
	

	
			
		if (move_uploaded_file($_FILES['logo']['tmp_name'],"Photoes/Logo/".$_FILES['logo']['name'])) 
			{

		$conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
		$sql="Insert into logo(logo,id) values('$logo_img','1')";
	
		if (mysqli_query($conn,$sql)) 
		{
			header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/logo_tabel.php");	
			//echo "inserat data successfull";
		}
		else
		{
			echo mysqli_error($conn);
		}

		}
		else
		{
			echo $_FILES['logo']['error'];
		}
	
?>