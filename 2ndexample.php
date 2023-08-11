<?php
session_start();
$orderid=rand();
			$_SESSION['randomorderid']=$orderid;
			$oid=$_SESSION['randomorderid'];
			session_destroy($oid);
			session_unset($oid);

			
?>