<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://localhost/Titan-Project/assets/Bootstarp/css/bootstrap.min.css">
	<link rel="icon" type="image/png" sizes="16x16"  href="http://localhost/Titan-Project/assets/images/favicons/favicon-16x16.png">
</head>
<body>
	<style>
		.card{
			width: 60vh;
			justify-content: center;
			background-color: #bfbdbd;
			margin: 10px 10px;
		}
		.card-session{
            align-items:center; justify-content:center; display:flex;
          }
          th{
          	font-weight: 600;
          }
          .center{
          	align-items:center; justify-content:center; display:flex;
          }

	</style>
	<div class="container-fluid">
		<div class="card-session">
			<div class="card">
				<div class="card-body">
					
			
	

				<?php

					header("Pragma: no-cache");
					header("Cache-Control: no-cache");
					header("Expires: 0");

					// following files need to be included
					require_once("./lib/config_paytm.php");
					require_once("./lib/encdec_paytm.php");

					$paytmChecksum = "";
					$paramList = array();
					$isValidChecksum = "FALSE";

					$paramList = $_POST;
					$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

					//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
					$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


					if($isValidChecksum == "TRUE") {
						echo "<h2><b>Checksum matched and following are the transaction details:</b></h2>" . "<br/>";
						if ($_POST["STATUS"] == "TXN_SUCCESS") {
							echo "<h3><b style='color:green;' >Transaction status is success</b></h3>" . "<br/>";
							
							


							

							//Process your transaction here as success transaction.
							//Verify amount & order id received from Payment gateway with your application's order id and amount.
						}
						else {
							echo "<b style='color:Red;'>Transaction status is failure</b>" . "<br/>";
						}

						if (isset($_POST) && count($_POST)>0 )
						{ 
							foreach($_POST as $paramName => $paramValue) {
									echo "<br/>" . $paramName . " = " . $paramValue;
							}
						}
						

					}
					else {
						echo "<b>Checksum mismatched.</b>";
						//Process transaction as suspicious.
					}

				?>
				<div>
					<a style="text-decoration:none;" href="http://localhost/Titan-Project/invoice.php">
                       <input type="submit" name="" class=" mt-3 btn btn-success btn-lg btn-block btn-round btn-d" value="Print Invoice">
                    </a>
                    *Please Note all Details
				</div>

				</div>
			</div>
		</div>
		<div class="card-session">
			<div class="card">
				<div class="card-body">


				<div class="center">
					<h4>Buy More Product <a href="http://localhost/Titan-Project/shop_product.php"><input class="btn btn-primary" type="Submit" name="Buy More" value="Buy More"></a></h4>
				</div>
				</div>
			</div>
		</div>	

	</div>


</body>
</html>

