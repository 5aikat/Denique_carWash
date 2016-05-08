<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="css/jquery.timepicker.css" type="text/css" />
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/jquery.timepicker.js"></script>
	
	
	<!-- Document Title
	============================================= -->
	<title>Denique | Auto Care</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header page-section dark" data-sticky-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="100">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="pics/logo001.png"><img src="pics/logo001.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="pics/logo001.png"><img src="pics/logo001.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
							<li><a href="home.html" data-href="#wrapper"><div style="color:black">Let's, Go Home.</div></a></li>
							 
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->
		<!-- Page Title
		============================================= -->
		
		<section id="slider" class="slider-parallax full-screen ">

			<div class="slider-parallax-inner">

				<div class="full-screen section nopadding nomargin noborder ohidden" style="background-image: url('pics/4.jpg'); background-size: cover; background-position: top center;">

					<div class="row nomargin" style="position: relative; z-index: 2;">
						<div class="col-sm-offset-6 col-sm-5 full-screen">
							<div class="vertical-middle col-padding">
								<div class="heading-block nobottomborder bottommargin-sm">
									<h1 style="font-size: 22px; color:black">Assign Cleaners...</h1>
									 
								</div>
										<div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

						<form class="nobottommargin" id="template-contactform" name="template-contactform" action="addCleaner.php" method="post">

							<div class="form-process"></div>

							<div class="col_half">
								<label for="template-contactform-name">Cleaner Name <small>*</small></label>
								<input type="text" id="cleanerName" name="cleanerName" value="" class="sm-form-control required" />
							</div>

							<div class="col_half col_last">
								<label for="template-contactform-name">Cleaner Phone Number<small>*</small></label>
								<input type="text" id="cleanerPhone" name="cleanerPhone" value="" class="sm-form-control required" />
							
								
								</div>
							<div class="col_full">
								<label for="template-contactform-name">Select Apartments<small>*</small></label>
								<select multiple class="sm-form-control" name="ApartmentName[]" id="ApartmentName[]">
								<?php
								require "config.php";
								
								$apartmentQuery = "SELECT * FROM `apartment` WHERE `isActive`= true";
								foreach($conn->query($apartmentQuery) as $alist)
								{
									$apartmentID = $alist['ApartmentID'];
									$apartmentName = $alist['ApartmentName'];
									
								?>
									<option value="<?php echo $apartmentID; ?>" > <?php echo $apartmentName;?> </option>
								<?php }  ?>
								</select>	
								<p> Please Note : Hold down the Ctrl (windows) / Command (Mac) button to select multiple options. </p>
						

							</div>

							


							<div class="col_full">
								<button class="button button-border button-rounded nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Assign Cleaner(s)</button>
							</div>

						</form>

						<script type="text/javascript">

							$("#template-contactform").validate({
								submitHandler: function(form) {
									$('.form-process').fadeIn();
									$(form).ajaxSubmit({
										target: '#contact-form-result',
										success: function() {
											$('.form-process').fadeOut();
											$(form).find('.sm-form-control').val('');
											$('#contact-form-result').attr('data-notify-msg', $('#contact-form-result').html()).html('');
											SEMICOLON.widget.notifications($('#contact-form-result'));
										}
									});
								}
							});

						</script>
								<a href="addUserUI.php" class="nobottommargin"><b style="color:black">* Hello Admin, is it time to add new users ?</b></a>
							</div>
						</div>
					</div>

					 
				</div>

			</div>

		</section><!-- #slider end -->
	

		<!-- Content
		============================================= -->
		 

					<!-- Sidebar
					============================================= -->
		</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>