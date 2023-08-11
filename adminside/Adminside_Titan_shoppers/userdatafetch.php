<?php
   
      $Adminuserid=$_SESSION['Adminuser_id'];
      $conn = mysqli_connect('localhost','root','','titanshoppers') or die('connection failed');
      $select = mysqli_query($conn, "SELECT * FROM `admin_ragister` WHERE AdminRagisterid  = '$Adminuserid'") or die('query failed');
      if(mysqli_num_rows($select) > 0)
          {
           $fetch=mysqli_fetch_assoc($select);
          }
                
?>