<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Landing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="css/nouislider.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <?php session_start(); ?>
  <div class="main-section" >
  	<!-- 
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Buildex Kit.</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="dropdown nav-item">
              <a href="#" class="dropdown-toggle nav-link icon d-flex align-items-center" data-toggle="dropdown">
                <i class="ion-ios-apps mr-2"></i>
                Components
                <b class="caret"></b>
              </a>
              <div class="dropdown-menu dropdown-menu-left">
                <a href="#" class="dropdown-item"><i class="ion-ios-apps mr-2"></i> All Components</a>
                <a href="#" class="dropdown-item"><i class="ion-ios-document mr-2"></i> Documentation</a>
              </div>
            </li>
            <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"><i class="ion-ios-cloud-download mr-2"></i> Download</a></li>
	        </ul>
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"><i class="ion-logo-facebook"></i></a></li>
	          <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"><i class="ion-logo-twitter"></i></a></li>
	          <li class="nav-item"><a href="#" class="nav-link icon d-flex align-items-center"><i class="ion-logo-instagram"></i></a></li>
	        </ul>
	      </div>
		  </div>
	</nav>
    END nav -->
    <!--
  	<section class="hero-wrap js-fullheight img" style="background-image: url(../images/bg_3.jpg);">
  		<div class="overlay"></div>
  		<div class="container">
  			<div class="row description js-fullheight align-items-center justify-content-center">
  				<div class="col-md-8 text-center">
  					<div class="text">
  						<h1>Buildex UI Kit.</h1>
  						<h4 class="mb-5">Free Bootstrap 4 UI Kit on Tools Design.</h4>
  						<p><a href="#" class="btn btn-primary px-4 py-3"><i class="ion-ios-cloud-download mr-2"></i>Download Tools</a></p>
  					</div>
  				</div>
  			</div>
  		</div>
  	</section>
	-->
	<!--
	<section class="ftco-section pb-0">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading-title text-center">
					<h1>Basic Elements</h1>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section" id="menus">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">
					<h2 class="heading-section mb-4">Menu</h2>
					<div class="navbar-wrap bg-warning rounded">
						<nav class="navbar navbar-expand-lg navbar-light">
							<a class="navbar-brand" href="#">Menu</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
								<span class="oi oi-menu"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarsExample01">
								<ul class="navbar-nav">
									<li class="nav-item d-flex active">
										<a class="nav-link d-flex align-items-center" href="#">Discover <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item d-flex">
										<a class="nav-link d-flex align-items-center" href="#">Profile</a>
									</li>
									<li class="nav-item d-flex">
										<a class="nav-link d-flex align-items-center" href="#">Settings</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
				<div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">
					<h2 class="heading-section mb-4">Menu with Icons</h2>
					<div class="navbar-wrap bg-info rounded">
						<nav class="navbar navbar-expand-lg navbar-light">
							<a class="navbar-brand" href="#">Menu</a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
								<span class="oi oi-menu"></span>
							</button>
							<div class="collapse navbar-collapse ml-auto" id="navbarsExample02">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item d-flex">
										<a href="#" class="nav-link d-flex align-items-center icon"><i class="ion-ios-send"></i></a>
									</li>
									<li class="nav-item d-flex">
										<a href="#" class="nav-link d-flex align-items-center icon"><i class="ion-logo-buffer"></i></a>
									</li>
									<li class="dropdown nav-item d-flex">
										<a href="#" class="dropdown-toggle nav-link d-flex align-items-center icon" data-toggle="dropdown">
											<i class="ion-ios-settings"></i>
											<b class="caret"></b>
										</a>
										<div class="dropdown-menu dropdown-menu-right">
											<h6 class="dropdown-header">Dropdown header</h6>
											<a href="#" class="dropdown-item">Action</a>
											<a href="#" class="dropdown-item">Another action</a>
											<a href="#" class="dropdown-item">Something else here</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">Separated link</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">One more separated link</a>
										</div>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	-->
	<section class="ftco-section ftco-section-2 section-signup page-header img" style="background-image: url(images/bg_2.jpg);">
		<div class="container">
			<div class="row">
				<div class="offset-md-4 col-md-4 mb-4 mb-md-0">
					<?php if($_SESSION){ ?>
						<?php if($_SESSION['error']){ ?>
						<div class="alert alert-danger">
							<div class="container">
								<div class="d-flex">
									<div class="alert-icon">
										<i class="ion-ios-information-circle-outline"></i>
									</div>
									<p class="mb-0 ml-2"><b>Error Sistem:</b> Email & username salah, silahkan diingat lagi.xoxoxo</p>
								</div>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true"><i class="ion-ios-close"></i></span>
								</button>
							</div>
						</div>
					<?php }};?>					
					<div class="card card-login py-4">
						<form class="form-login" method="post" action="proseslogin.php" onSubmit="return validasi()">
							<div class="card-header card-header-primary text-center">
								<h4 class="card-title">User Login</h4>
								<div class="social-line">
									<a href="#" class="btn-icon d-flex align-items-center justify-content-center">
										<i class="ion-logo-facebook"></i>
									</a>
									<a href="#" class="btn-icon d-flex align-items-center justify-content-center">
										<i class="ion-logo-twitter"></i>
									</a>
									<a href="#" class="btn-icon d-flex align-items-center justify-content-center">
										<i class="ion-logo-googleplus"></i>
									</a>
								</div>									
							</div>
							<div class="card-body p-4">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="ion-ios-paper-plane"></i>
										</span>
									</div>
									<input type="email" name="email" id="email" class="form-control" placeholder="Email...">
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">
											<i class="ion-ios-lock"></i>
										</span>
									</div>
									<input type="password" name="password"  id="password" class="form-control" placeholder="Password...">
								</div>
							</div>
							<div class="footer text-center">
							
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- - - - - -end- - - - -  -->
		
	  <footer class="ftco-section ftco-section-2">
	  	<div class="col-md-12 text-center">
          <p class="mb-0">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());

            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="javascript:void(0)">Colorlib & Haryanto.Duwi</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
	  </footer>

  </div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/nouislider.min.js"></script>
  <script src="js/moment-with-locales.min.js"></script>
  <script src="js/bootstrap-datetimepicker.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
<script type="text/javascript">
	function validasi() {
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;		
		if (email != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>