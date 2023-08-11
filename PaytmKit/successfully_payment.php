<?php include("mainhead.php"); ?>

<?php




        session_start();
        ini_set('display_errors', FALSE);
        $name=$_POST['Fullname'];
        $_SESSION['fname']=$name;
        //$user_name=$_SESSION['user_name'];
        $oid=$_SESSION['randomorderid'];
        $name=$_GET['FullName'];
        $grandtotal=$_SESSION['grandtotal'];
        
        date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$date=date('d-m-Y');
$time=date('H:i:s');
        
        $con=mysqli_connect("localhost","root","","titanshoppers");
        
        //$confirm_query1=mysqli_query($con,$sql);
        $confirm_query="update order_user_info set Status='Confirmed',Payment_time_date='$date',Payment_time='$time',Grand_total='$grandtotal' where FullName = '$name'";
        $confirm_query_result=mysqli_query($con,$confirm_query);
        session_destroy($oid);
        session_unset($oid);
        session_unset($_SESSION['grandtotal']);
        //unset($_SESSION['cart']);
        
    

?>
  
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <section style="background-color: green;">
        <div class="titan-caption">
          <div style="color: #fff;" class="caption-content">
            <div  class="font-alt mb-30 titan-title-size-4">PAYMENT SUCCESSFULY</div>
            <div class="font-alt">Your order place successfully<br/>
            </div>
            <!-- <div class="font-alt mt-30"><a class="btn btn-border-w btn-round" href="index.html">Back to home page</a></div> -->
          </div>
        </div>
      </section>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>