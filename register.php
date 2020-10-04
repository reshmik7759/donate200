<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";
      //$result = mysqli_query($db,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$usertype=$row['type'];
      
      //$count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      /*if($count == 1) {
		 while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
		 {
			 $usertype=$row['type'];
		 }*/
        if ( $_SESSION['login_user'] = $myusername)
        {
            header("location: dashboard/admin.php");
        }
	     
      
	  else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>DONATE-200</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">


	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">

	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	<?php include("header.php"); ?>

<script language="javascript" type="text/javascript">

    function validateForm()

    {

     if(document.getElementById("textfield").value=="")

    {

     alert("Enter Username!"); 

     document.getElementById("textfield").focus();

     return false;

    }
	if(document.getElementById("textfield2").value=="")

    {

     alert("Enter Password!"); 

     document.getElementById("textfield2").focus();

     return false;

    }
	
return true;
}
</script>
</head>
<body>

	<div class="wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-6 d-flex align-items-center">
					<p class="mb-0 phone pl-md-2">
						
				</div>
				<div class="col-md-6 d-flex justify-content-md-end">
					<div class="social-media">
						<p class="mb-0 d-flex">
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
							<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
							
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">DONATE-200</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
					<li class="nav-item cta"><a href="contact.html" class="nav-link">Donate</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
	<section class="hero-wrap js-fullheight">
		<div class="home-slider js-fullheight owl-carousel">
			<div class="slider-item js-fullheight" style="background-image:url(images/page1.jpg);">
				<div class="overlay-1"></div><div class="overlay-2"></div><div class="overlay-3"></div><div class="overlay-4"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center">
						<div class="col-md-10 col-lg-7 ftco-animate">
							<div class="text w-100">
								<h2>Help the poor in need</h2>
								<h1 class="mb-3">Lend the helping hand get involved</h1>
								
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
				<div class="overlay-1"></div><div class="overlay-2"></div><div class="overlay-3"></div><div class="overlay-4"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center">
						<div class="col-md-10 col-lg-7 ftco-animate">
							<div class="text w-100">
								<h2>Raising Hope</h2>
								<h1 class="mb-3">Discover Non-Profit Charity Platform</h1>
								<div class="d-flex meta">
									
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			
		</div>
	</section>

	<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-5 order-md-last d-flex align-items-stretch">
					<div class="donation-wrap">
						<div class="total-donate d-flex align-items-center">
							
							<h4>Add Your Partners </h4>
				
						</div>
						<form action="admin.p" class="appointment">

							<div class="row">

								<div class="col-md-12">
									
									<div class="form-group">
										
									</div>
								</div>

								<div class="col-md-12">
									
									<div class="form-group">
										<label for="name">Full Name</label>
										<div class="input-wrap">
											
											<input type="text" class="form-control" placeholder="">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">Mobile Number</label>
										<div class="input-wrap">
											
											<input type="Mobile" class="form-control" placeholder="">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="name"> Address</label>
										<div class="input-wrap">
											
											<TEXTAREA name="address" class="form-control" ></TEXTAREA>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">Refferal User Id</label>
										<div class="form-field">
											
											<input type="text"  readonly placeholder="User ID" value= " <?php echo $_SESSION['name'];>" class="form-control" placeholder="">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">Amount</label>
										<div class="input-wrap">
											<div class="icon"><span class="fa fa-money"></span></div>
											<input type="text" class="form-control" placeholder="Rs-200/-" readonly>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="name">Payment Status</label>
										<div class="d-lg-flex">
											<div class="form-radio mr-3">
												<div class="radio">
													<label>
														<input type="radio" name="radio-input" checked>
														<span class="checkmark"></span>
														<span class="fill-control-description">Approved</span>
													</label>
												</div>
											</div>
											<div class="form-radio mr-3">
												<div class="radio">
													<label>
														<input type="radio" name="radio-input">
														<span class="checkmark"></span>
														<span class="fill-control-description">Pending</span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Register Now" class="btn btn-secondary py-3 px-4">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</center>	
			</div>
		</div>
						</form>
					</div>
				</div>
				<div class="col-md-7 wrap-about py-5">
					<div class="heading-section pr-md-5 pt-md-5">
						<span class="subheading"></span>
						<h2 class="mb-4"></h2>
						<p></p>
					</div>
					
						
					</div>
					
				</div>
			</div>
		</div>
	</section>



	

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
					<h2 class="footer-heading">Donate-200.</h2>
					
					<ul class="ftco-footer-social p-0">
						<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
						<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
						<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
					</ul>
					
				</div>
				
				<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
					<h2 class="footer-heading">Have a Questions?</h2>
					<div class="block-23 mb-3">
						<ul>
							<li><span class="icon fa fa-map"></span><span class="text">Office Address</span></li>
							<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">1234567890</span></a></li>
							<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@abc.com</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-md-12 text-center">

					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="#" target="_blank">www.donate-200.com</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
				</div>
			</div>
		</footer>

		
		

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/jquery.timepicker.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		<script src="js/main.js"></script>
		
	</body>
	</html>
	<?php
	  if(isset ($_POST["loginbtn"]))
	  {
		  
	      $uname=$_POST["unametxt"];
		  $pass=$_POST["passtxt"];

	            if ($_POST['unametxt'] == 'admin' && $_POST['passtxt'] == 'admin')
	                {
						 header("location:MainPanel.php");        
	                  
	               }
	  }
?>
