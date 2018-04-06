<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


  <title>Cryptowatch</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font.v-2/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  

</head>

<body id="body">

<?php
require('db.php');
session_start();
if(isset($_POST['username'])){
	$username=stripslashes($_REQUEST['username']);
	$username=mysqli_real_escape_string($con,$username);
	$password=stripslashes($_REQUEST['password']);
	$password=mysqli_real_escape_string($con,$password);
	
	$query="SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result=mysqli_query($con,$query) or die(mysqlerror());
	$row=mysqli_num_rows($result);
	if($row==1){
		$_SESSION['username']=$username;
		header("Location:index.php");
	}
	
}		
else{

?>

 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class="preloader">
      <div class="sk-circle1 sk-child"></div>
      <div class="sk-circle2 sk-child"></div>
      <div class="sk-circle3 sk-child"></div>
      <div class="sk-circle4 sk-child"></div>
      <div class="sk-circle5 sk-child"></div>
      <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
      <div class="sk-circle8 sk-child"></div>
      <div class="sk-circle9 sk-child"></div>
      <div class="sk-circle10 sk-child"></div>
      <div class="sk-circle11 sk-child"></div>
      <div class="sk-circle12 sk-child"></div>
    </div>
  </div> 
  <!--
  End Preloader
  ==================================== -->
<section class="top-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
<script type="text/javascript">
baseUrl = "https://widgets.cryptocompare.com/";
var scripts = document.getElementsByTagName("script");
var embedder = scripts[ scripts.length - 1 ];
var cccTheme = {"General":{"background":"#000","priceText":"#fff","enableMarquee":true},"Currency":{"color":"#fff"}};
(function (){
var appName = encodeURIComponent(window.location.hostname);
if(appName==""){appName="local";}
var s = document.createElement("script");
s.type = "text/javascript";
s.async = true;
var theUrl = baseUrl+'serve/v3/coin/header?fsyms=BTC,ETH,XMR,LTC,DASH&tsyms=USD,EUR,CNY,GBP';
s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
embedder.parentNode.appendChild(s);
})();
</script>


                    
            </div>
        </div>
    </div>
</section> 

  

<!--
Fixed Navigation
==================================== 
<section class="top-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ul class="currency-status">
                    <li>
                        <a href="#">
                            <i class="tf-ion-arrow-down-b down-status"></i>
                            <span>BTC/USD</span>
                            <span>15046.07</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="tf-arrow-dropup up-status"></i>
                            <span>ETH/USD</span>
                            <span >843.0005</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="tf-arrow-dropup up-status"></i>
                            <span>BCH/USD</span>
                            <span>2648.1377</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="tf-arrow-dropup up-status"></i>
                            <span>BTG/USD</span>
                            <span>278.0000</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="tf-arrow-dropup down-status"></i>
                            <span>DASH/USD</span>
                            <span>1131.8100</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="tf-arrow-dropup down-status"></i>
                            <span>XRP/USD</span>
                            <span>2.1956</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="tf-arrow-dropup up-status"></i>
                            <span>ZEC/USD</span>
                            <span>2.1956</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> -->
<section class="header  navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="index.html">
                        <img src="C:\Users\Kripakaran\Desktop\600x600bf.jpg" alt="" width="150px">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="tf-ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pricing.html">Buy/Sell</a>
                            </li>
                            
							<li class="nav-item">
                                <a class="nav-link" href="C:\Users\Kripakaran\Downloads\bitbank-bitcoin-template\bitbank-bitcoin-template\startbootstrap-freelancer-gh-pages\calc.html">Calculator/Converter</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="C:\Users\Kripakaran\Downloads\bitbank-bitcoin-template\bitbank-bitcoin-template\startbootstrap-stylish-portfolio-gh-pages\news.html">Newsletter</a>
                            </li>
							
                            <li class="nav-item">
                                <a class="nav-link" href="C:\Users\Kripakaran\Downloads\bitbank-bitcoin-template\bitbank-bitcoin-template\cryptocurrency-price-chart-master\price.html">Price Charts</a>
                            </li>
							
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.html">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="signup.html">Sign Up</a>
                            </li>

                          
                        </ul>
                    </div>
                </nav>
                
            </div>
        </div>
    </div>
</section>

<section class="signin-page account">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="block">
                    <h2 class="text-center">Sign In to BitBank</h2>
                    
                    <form class="text-left clearfix mt-50" action="index.html" >
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-main" >Sign In</button>
                        
                    </form>
                    <p class="mt-20">New in this site ?<a href="signup.php"> Create New Account</a></p>
                    <p><a href="forget-password.html"> Forgot your password?</a></p>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- end Footer Area
    ========================================== -->

    
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.7 -->
    <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script>
        var trace1 = {
  x: [1, 2, 3, 4], 
  y: [10, 15, 13, 17], 
  type: 'scatter'
};
var trace2 = {
  x: [1, 2, 3, 4], 
  y: [16, 5, 11, 9], 
  type: 'scatter'
};
var data = [trace1, trace2];
Plotly.newPlot('myDiv', data);
    </script>
    <!-- Smooth Scroll js -->
    <script src="plugins/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    
    <!-- Custom js -->
    <script src="js/script.js"></script>

  </body>
  </html>