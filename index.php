
<!DOCTYPE html>

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>CS15 Class 2016</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">
		<?php require('functions.php');?>
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css -->
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<!--<div class="scrollToTop"><i class="icon-up-open-big"></i></div> -->

		<!-- header start -->
		<!-- ================ -->

		<header class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<!-- header-left start -->
						<!-- ================ -->
						<h2 style="color:orange;"><?php echo $message;?></h2>
						<div class="header-left clearfix">
							<!-- logo -->
							<div class="logo smooth-scroll">
							<!--	<a href="#banner"><img id="logo" src="images/logo.png" alt="Worthy"></a>-->
							</div>
							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
							</div>
						</div>
						<!-- header-left end -->
					</div>
					<div class="col-md-8">
						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">
							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default">
									<div class="container-fluid">
										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>
									</div>
								</nav>
								<!-- navbar end -->
							</div>
							<!-- main-navigation end -->
						</div>
						<!-- header-right end -->
					</div>
				</div>
			</div>
		</header>
		<!-- header end -->


	<h3 class="text-center title" id="portfolio"><?php echo $message;?></h3>
		<!-- section start -->
		<!-- ================ -->
		<div class="section">
			<div class="container">
				<div class="separator"></div>
				<div class="row">
						<div class="jumbotron col-md-12 text-center">
							<h2 class="text-primary"><?php writeMessage();?></h2>
						</div>
					<div class="container col-md-6 col-md-offset-3">
						<form method="post">
							<div class="form-group has-feedback col-md-offset-4">
								<div class="col-md-6">
									<input style="text" class="form-control input-sm" value="<?php echo $_GET["name2"]?>" id="name2" placeholder="# of Words" name="name2" required>
									<?php echo "<p class='text-danger'>$errName</p>";?>
								</div>
								<div class="checkbox col-md-12">
  								<label><input type="checkbox" value="" checked name="optradio1">Number</label>
								</div>
								<div class="checkbox col-md-12">
									<label><input type="checkbox" value="" checked name="optradio2">Symbol</label>
								</div><br>
									<div class="checkbox col-md-12">
								<input type="submit" value="Gime" class="btn btn-default">
							</div>
						 </div>
						</form>
					</div>
       </div>
				<!-- isotope filters end -->
				<div class="row">
					<div class="text-center">
						<div style="background-color:black;">
  						<img alt ="type writer" class="center-block" src="images/Typewriter.jpg" style="width:60%;">
					  </div>
					</div>
			 </div>
	 </div>
			<!-- Modal end -->
</div>
<!-- section end -->
		<!-- section start -->
		<!-- ================ -->
		<div class="default-bg space">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="text-center">"Test"</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- footer start -->
		<!-- ================ -->
		<footer id="footer">
			<!-- .footer start -->
			<!-- ================ -->

			<!-- .subfooter start -->
			<!-- ================ -->
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2016 </p>
						</div>
					</div>
				</div>
			</div>
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>

		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>
