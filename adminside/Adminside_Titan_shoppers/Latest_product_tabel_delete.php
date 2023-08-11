<?php

session_start();
                        
                        $conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
                        $sql="DELETE FROM latestproduct WHERE Id=".$_REQUEST['latestpid'];
                        if (mysqli_query($conn,$sql)) 
                        {
                          $_SESSION['LatestProductdelete'] = "Delete Successfully!!";
                          header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/Latest_product_tabel.php");
                        }
                        else
                        {
                          echo mysqli_error($conn);
                        }

?>