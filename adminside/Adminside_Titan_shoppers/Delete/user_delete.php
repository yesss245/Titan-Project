<?php
session_start();
                        $conn =mysqli_connect("localhost","root","","titanshoppers")or die("could not connect");
                        $sql="DELETE FROM login WHERE userid=".$_REQUEST['userpid'];
                        if (mysqli_query($conn,$sql)) 
                        {
                          $_SESSION['userid'] = "Delete Successfully!!";
                          header("location:http://localhost/Titan-Project/adminside/Adminside_Titan_shoppers/user_tabel.php");
                        }
                        else
                        {
                          echo mysqli_error($conn);
                        }
?>