<?php



$Adminuserid=$_SESSION['Adminuser_id'];
if(isset($_GET['logout'])){
   session_destroy();
   unset($Adminuserid);
   header('location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Titanadminlogin.php');
}

?>