<?php
session_start();
                        $conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
                        $sql="DELETE FROM shopproduct WHERE productid=".$_REQUEST['productid'];
                        if (mysqli_query($conn,$sql)) 
                        {
                          $_SESSION['Fproductid'] = "Delete Successfully!!";
                          header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Female_product.php");
                        }
                        else
                        {
                          echo mysqli_error($conn);
                        }
?>