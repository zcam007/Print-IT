<!DOCTYPE html>
<!--mixin index-comming-soon-item()
.index-demo-item
	img.img-responsive(src="assets/images/bg-view-demo.jpg" alt="header")
	.image-frame
		img.img-responsive(src="assets/images/home-commingsoon-2.jpg" alt="comming soon")
	h5 COMMING SOON
-->
<html class="no-js">
  <head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Huge – Multipurpose Html Template</title>
	<meta name="description" content="Huge – Multipurpose Html Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicon/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="favicon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="favicon/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="vendors/animate/animate.min.css">
	<link rel="stylesheet" href="assets/fonts/huge/styles.css">
	<link href="//fonts.googleapis.com/css?family=Montserrat:700,400" rel="stylesheet" type="text/css">
	<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic&amp;subset=latin,latin-ext,cyrillic" rel="stylesheet" type="text/css">
	<link href="//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="vendors/full-page/jquery.fullPage.css">
	<!--Main stylesheet-->
	<link rel="stylesheet" href="assets/css/main.css">
	<!--Modernizr js-->
	<script src="vendors/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script><style> .nav-main-menu > li > ul, .nav-shop-cart{display:none;}</style>
  </head>
  <body>
	 <div><?php include('nav_menu_header.php'); ?></div>
	  
	<main>
	  <!--site header-->
	 <div><?php 
	 if($fluid_wallpaper!=null){
	 include($fluid_wallpaper); }?></div>
	 
	  <!--end site header-->
	  
	  <div><?php include($page_content);?></div>
	  
	  	  <!--site footer-->
	 <div><?php include('footer.php'); ?></div>
	 


	</main>
	<script src="vendors/jquery/jquery-1.11.2.min.js"></script>
	<script src="vendors/stellar/jquery.stellar.min.js"></script>
	<script src="vendors/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="vendors/smooth-scroll/SmoothScroll.js"></script>
	<script src="vendors/jqueryui/jquery-ui.min.js"></script>
	<script src="vendors/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="vendors/slick/slick.js"></script>
	<script type="text/javascript" src="vendors/magnific-popup/jquery.magnific-popup.js"></script>
	<script src="vendors/isotope/isotope.pkgd.min.js"></script>
	<script src="vendors/isotope/packery-mode.pkgd.min.js"></script>
	<script type="text/javascript" src="vendors/img-loaded/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="vendors/full-page/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="vendors/full-page/jquery.easings.min.js"></script>
	<script type="text/javascript" src="vendors/full-page/jquery.fullPage.js"></script>
	<script src="vendors/countto/jquery.countTo.js"></script>
	<script src="vendors/jquery-countdown/dist/jquery.countdown.js"></script>
	<script src="vendors/jquery-countdown/dist/jquery.final-countdown.js"></script>
	<script src="vendors/jquery-countdown/dist/kinetic.js"></script>
	<script src="assets/js/main.js"></script>
	<script>(function(b,o,i,l,e,r){b.GoogleAsnalyticsObject=l;b[l]||(b[l]=function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;e=o.createElement(i);r=o.getElementsByTagName(i)[0];e.src='//www.google-analytics.com/analytics.js';r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));ga('create','UA-57387972-1');ga('send','pageview');</script>
  </body>
</html>