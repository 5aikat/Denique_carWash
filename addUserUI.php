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
	<link rel="stylesheet" href="css/jquery-ui.css" type="text/css" />
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
	<script type="text/javascript" src="js/jquery-ui.js"></script>
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
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Denique Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="DeniqueLogo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

		</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		
	

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Postcontent
					============================================= -->
					<div class="postcontent nobottommargin">

						<h3>Add an Customer</h3>

						<div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

						<form class="nobottommargin" id="template-contactform" name="template-contactform" action="addUser.php" method="post">

							<div class="form-process"></div>

							<div class="col_one_third">
								<label for="template-contactform-name">Customer Name <small>*</small></label>
								<input type="text" id="userName" name="userName" value="" class="sm-form-control required" />
							</div>

							<div class="col_one_third">
								<label for="template-contactform-name">Email ID<small>*</small></label>
								<input type="text" id="email" name="email" value="" class="sm-form-control required" />								
							</div>
							
							<div class="col_one_third">
								<label for="template-contactform-name">Phone Number<small>*</small></label>
								<input type="text" id="phone" name="phone" value="" class="sm-form-control required" />								
							</div>

							<div class="col_one_third">
								<label for="template-contactform-name">Date of Birth<small>*</small></label>
								<input type="text" id="dob" name="dob" value="" class="sm-form-control required" />
							</div>

							<div class="col_one_third">
								<label for="template-contactform-name">Date of Anniversary<small>*</small></label>
								<input type="text" id="anniversary" name="anniversary" value="" class="sm-form-control required" />
							</div>
							
							<div class="col_one_third">
								<label for="template-contactform-name">Car Make<small>*</small></label>
								<input type="text" id="carmake" name="carmake" value="" class="sm-form-control required" />								
							</div>
							
							<div class="col_one_third">
								<label for="template-contactform-name">Car Model<small>*</small></label>
								<input type="text" id="carmodel" name="carmodel" value="" class="sm-form-control required" />								
							</div>
							
							<div class="col_one_third">
								<label for="template-contactform-name">Registration Number<small>*</small></label>
								<input type="text" id="registrationNo" name="registrationNo" value="" class="sm-form-control required" />
							</div>
							
							<div class="col_one_third">
								<label for="template-contactform-name">Car Type<small>*</small></label>
								<input type="text" id="cartype" name="cartype" value="" class="sm-form-control required" />								
							</div>
							
							<div class="col_one_third">
								<label for="template-contactform-name">Car Color<small>*</small></label>
								<input type="text" id="carcolor" name="carcolor" value="" class="sm-form-control required" />								
							</div>
							<div class="clear"></div>
							<div class="col_one_third col_last">
								<label for="template-contactform-name">Ready By Time<small>*</small></label>
								<input type="text" id="readyBy" name="readyBy" value="" class="sm-form-control required" />
							</div>
							 <script>
                $(function() {
                    $('#readyBy').timepicker({ 'scrollDefault': 'now' });
                });
            </script>

							<div class="col_one_third col_last">
								<label for="template-contactform-name">Last Four Digit<small>*</small></label>
								<input type="text" id="lastFour" name="lastFour" value="" class="sm-form-control required" />
							</div>
							<script>
							</script>
							<div class="clear"></div>
							<div class="col_one_third col_last">
								<label for="template-contactform-name">Service Type<small>*</small></label>
								<select class="sm-form-control" name="serviceType" id="serviceType">
									<option value="1">Daily</option>
									<option value="2">Alternate</option>
									<option value="3">Weekly</option>
								</select>
							</div>
							<div class="clear"></div>
							<div class="col_one_third col_last">
								<label for="template-contactform-name">Service Start Date<small>*</small></label>
								<input type="text" id="startDate" name="startDate">
							</div>
							<script>
							  $(function() {
								$( "#startDate" ).datepicker( {
									minDate:0,
									inline: true,
									dateFormat: 'dd-mm-yy'
								});
								});
							
							</script>

							<div class="col_one_third col_last">
								<label for="template-contactform-name">Service End Date<small>*</small></label>
								<input type="text" id="endDate" name="endDate" >
							</div>
							
							<script>
							  $(function() {
								$( "#endDate" ).datepicker({
									minDate:0,
									inline: true,
									dateFormat: 'dd-mm-yy'
										});
								});
							
							</script>

							<div class="clear"></div>
							
<script type="text/javascript">

function fetch_select(val)
{
   $.ajax({
     type: 'post',
     url: 'getCleaner.php',
     data: {
       ApartmentName:val
     },
     success: function (response) {
       document.getElementById("CleanerName").innerHTML=response; 
	   console.log("Success");
	   console.log(response);
     }
   });
}
var start = document.getElementById("startDate").innerText;
var end = document.getElementById("endDate").innerText;
function fetch_load(val)
{
	$.ajax({
		type: 'post',
		url: 'getCleanerLoad.php',
		data: {
			cleanerID:val
		},
		success: function (response) {
			document.getElementById("cleanerLoad").innerHTML=response;
			console.log("Success");
			console.log(response);
		}
	});
}

</script>
							<div class="col_one_third">
								<label for="template-contactform-name">Select Apartment<small>*</small></label>
								<select class="sm-form-control" name="ApartmentName" id="ApartmentName" onchange="fetch_select(this.value);">
									<option>Select an Apartment</option>
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
								
						

							</div>
							<div class="col_one_third">
								<label for="template-contactform-name">Enter Parking<small>*</small></label>
								<input type="text" id="parking" name="parking" >
							</div>
			<!--			//
						//
						//		$(document).ready(function(){
						//			$("#ApartmentName").click(function(){
						//				var apartment = $("#ApartmentName").val();
						//				console.log(apartment);
						//				var dataString = 'apartment='+ apartment ;
						//				$.ajax({
						//					type: "POST",
						//					url: "getParking.php",
						//			//		data: dataString,
						//					cache: false,
						//					success: function (response) {
						//						document.getElementById("parking").innerHTML = response;
						//						console.log("Success");
						//						console.log(response);
						//					}
						//				});
//
						//				return false;
						//			});
						//		});
//
//
						// -->
							<div class="col_one_third">
								<label for="template-contactform-name">Select Cleaner<small>*</small></label>
								<select multiple class="sm-form-control" name="CleanerName" id="CleanerName" onchange="fetch_load(this.value);" >
									<option value="Select a cleaner" > Select a cleaner </option>
								</select>	
								<p id="cleanerLoad"></p>
							</div>
							
							<div class="clear"></div>

							<div class="clear"></div>
							
							<div class="col_one_third col_last">
								<label for="template-contactform-name">Pick your First Interior Wash Date</label>
								<input type="text" id="interiorWashDate" Name="interiorWashDate">
							</div>
							<script>
							  $(function() {
								$( "#interiorWashDate" ).datepicker( {
									minDate:0,
									inline: true,
									dateFormat: 'dd-mm-yy'
								});

								});

							
							</script>

							<div class="col_full">
								<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Add User</button>
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

					</div><!-- .postcontent end -->

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