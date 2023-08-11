
<?php

session_start();
$oid=$_SESSION['randomorderid'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Invoice</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	 <link href="http://fonts.cdnfonts.com/css/ocr-a-extended" rel="stylesheet">
	 <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
</head>

<body>
	<style>
		body {
    background: #fff;
    
      }
      .navbar-brand{
      	letter-spacing: 4px;
        font-weight: 600;
        font-size: 26px;
        color: #000;
      }

	</style>

	<?php

		$conn=mysqli_connect("localhost","root","","titanshoppers");
		$sql="SELECT * FROM order_user_info WHERE Randomorderid='$oid'";
		$result=mysqli_query($conn,$sql);
		if ($result) {
			while($row=mysqli_fetch_assoc($result)){

	?>
	

	<div class="container-fluid" >
		<page size="A4">	
		    <div class="row">
		        <div class="col-12">
		            <div class="card">
		                <div class="card-body p-0">
		                    <div class="row p-5">
		                        <div class="col-md-6">
		                        	<img height="70vh" width="auto" src="http://localhost/Titan-Project/assets/images/shop/Titanshoppersname.jpg">
		                            <!-- <a style="font-family: 'OCR A Extended', sans-serif;" class="navbar-brand" href="home_shop.php" >
						             TITAN SHOPPERS
						            </a> -->
		                        </div>

		                        <div class="col-md-6 text-right">
		                            <p class="font-weight-bold mb-1"><span class="text-muted">Invoice no-</span>TS# <?php echo $row['Order_id']; ?></p>
		                            <p class="text-muted"><?php echo $row['Payment_time_date']; ?></p>
		                        </div>
		                    </div>

		                    <hr class="my-5">

		                    <div class="row pb-5 p-5">
		                    	<!-- <client information> -->
		                        <div class="col-md-6">
		                        		<p class="font-weight-bold"></p>
                                <p  class="font-weight-bold "><span class="text-muted">Name:-</span><?php echo $row['FullName']; ?></p>
                                <p style="margin-top:-10px;" class="font-weight-bold"><span class="text-muted">ORDER ID:-</span> <?php echo $row['Randomorderid']; ?></p>
                                <p style="margin-top:-10px;" class="font-weight-bold "><span class="text-muted">Phone No:-</span> <?php echo $row['Phone_no']; ?></p>
                                <p style="margin-bottom:-1px;" class="font-weight-bold"><span class="text-muted">ADDRESS</span> 
                                <p class="mb-1"><?php echo $row['House_no']; ?>,<?php echo $row['Area']; ?>,</p>
                                <p class="mb-1"><?php echo $row['Landmark']; ?>,</p>
                                <p class="mb-1"><?php echo $row['Town_city']; ?>-<?php echo $row['Pincode']; ?>,</p>
                                <p class="mb-1"><?php echo $row['State']; ?>,</p>
                                <p><?php echo $row['Country']; ?>.</p>
		                        </div>

		                        <div class="col-md-6 text-right">
		                            <p class="font-weight-bold mb-4">Payment Details</p>
		                            <p class="mb-1"><span class="text-muted">Payment Type: </span> Paytm</p>
		                            <p class="mb-1"><span class="text-muted">Name: </span><?php echo $row['FullName']; ?></p>
		                        </div>
		                    </div>
	<?php			

			}
		}

	?>	                    

									
									
		                    <div class="row p-5">
		                        <div class="col-md-12">
		                            <table class="table">
		                                <thead>
		                                    <tr>
		                                        <th class="border-0 text-uppercase small font-weight-bold">ID</th>
		                                        <th class="border-0 text-uppercase small font-weight-bold">Item</th>
		                                        <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
		                                        <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
		                                        <th class="border-0 text-uppercase small font-weight-bold">Total</th>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                	<?php 
		                                	$counter = 0;
																			$conn=mysqli_connect("localhost","root","","titanshoppers");
																			$orderdetailsquery="SELECT * FROM user_order WHERE Randomorderid='$oid'";
																			$orderresult=mysqli_query($conn,$orderdetailsquery);
																			if ($orderresult) {
																				while($orderrow=mysqli_fetch_assoc($orderresult))
																				{
																			?>
		                                    <tr>
		                                        <td><?php echo ++$counter; ?></td>
		                                        <td><?php echo $orderrow['Product_Name']; ?></td>
		                                        
		                                        <td><?php echo $orderrow['Quantity']; ?></td>
		                                        <td>₹<?php echo $orderrow['Price']; ?>/-</td>
		                                        <td>₹<?php echo $orderrow['Total_Price']; ?>/-</td>
		                                    </tr>
		                                  <?php

																				}
																			}
																			

																			?>
		                                </tbody>
		                                <tfoot>
		                                	<tr>
		                                		<td colspan="1" class="text-right text-uppercase small font-weight-bold"></td>
		                                		<td  class=" text-uppercase small font-weight-bold">Total</td>
		                                		<?php
		                                		$sql4 = "select sum(Quantity) from user_order WHERE Randomorderid='$oid'";
		                                    $qQuantity = mysqli_query($conn,$sql4);
		                                    $tQuantity = mysqli_fetch_array($qQuantity);
		                                		?>
		                                		<td class=" text-uppercase small font-weight-bold"><?php echo "$tQuantity[0]"; ?></td>

		                                		<?php
			                                    $sql6 = "select sum(Price) from user_order WHERE Randomorderid='$oid'";
			                                    $pTotal_Price = mysqli_query($conn,$sql6);
			                                    $pTotal_Price = mysqli_fetch_array($pTotal_Price);
			                                  ?>
		                                		<td class=" text-uppercase small font-weight-bold">₹<?php echo "$pTotal_Price[0]"; ?>/-</td>

		                                		<?php
			                                    $sql5 = "select sum(Total_Price) from user_order WHERE Randomorderid='$oid'";
			                                    $qTotal_Price = mysqli_query($conn,$sql5);
			                                    $tTotal_Price = mysqli_fetch_array($qTotal_Price);
			                                  ?>
		                                		<td class=" text-uppercase small font-weight-bold">₹<?php echo "$tTotal_Price[0]"; ?>/-</td>
		                                		
		                                	</tr>
		                                </tfoot>
		                            </table>
		                        </div>
		                    </div>
		                    

		                    <div class="bg-dark text-white p-4">

		                    	

		                        <div class="px-5 text-right">
		                        <?php
			                          $sql5 = "select sum(Total_Price) from user_order WHERE Randomorderid='$oid'";
			                          $qTotal_Price = mysqli_query($conn,$sql5);
			                          $tTotal_Price = mysqli_fetch_array($qTotal_Price);
			                      ?>       		
		                            <div class="mb-2">Sub - Total amount<div class="h2 font-weight-light">₹<?php echo "$tTotal_Price[0]"; ?>/-</div></div>
		                            
		                        </div>
		                        <br>

		                        <div class=" px-5 text-right">
		                        	<?php
			                          $sql7 = "select sum(Gst) from user_order WHERE Randomorderid='$oid'";
			                          $gTotal_Price = mysqli_query($conn,$sql7);
			                          $gTotal_Price = mysqli_fetch_array($gTotal_Price);
			                        ?>
		                            <div class="mb-2">Gst 5%</div>
		                            <div class="h2 font-weight-light">₹<?php echo "$gTotal_Price[0]"; ?>/-</div>
		                        </div><br>

		                        
		                        <div class=" px-5 text-right">
		                        	<?php
	                            $conn=mysqli_connect("localhost","root","","titanshoppers");
	                            
	                            $sql6 = "select sum(Gst)+sum(Total_Price)from user_order where Randomorderid = '$oid'";
	                                    $qgst = mysqli_query($conn,$sql6);
	                                    $ttgst = mysqli_fetch_array($qgst);
	                                    $_SESSION['grandtotal']=$ttgst[0];
	                            ?>
		                            <div class="mb-2">Grand Total</div>
		                            <div class="h2 font-weight-light">₹<?php echo "$ttgst[0]"; ?>/-<br><span style="color:green; font-family: sans-serif; font-size: 10px; margin-top:-15px;">Payment Successfully!!</span></div>
		                        </div>
		                        <br>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <p><span style="font-weight: 600;">NOTE:-</span>This is a computer generated receipt and does not require physical signature.</p>
	    </page>
    <div class=" print text-light mt-5 mb-5 text-center small"> <a onclick="printpage()" class="text-light" target="_blank" href="#"><button  id="printpagebutton" class="  btn btn-primary ">Print</button></a></div>

</div>

<script>
	
	function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        printButton.style.visibility = 'visible';

        window.onafterprint = function(){
        	window.location.reload(true);
        }
    }

</script>

</body>
</html>