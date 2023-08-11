<?php
session_start();
                        $conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
                        $sql="DELETE FROM shope_banners WHERE No=".$_REQUEST['No'];
                        if (mysqli_query($conn,$sql)) 
                        {
                          $_SESSION['No'] = "Delete Successfully!!";
                          header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Logo_banners.php");
                        }
                        else
                        {
                          echo mysqli_error($conn);
                        }
?>