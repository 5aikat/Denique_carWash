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
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/jquery.timepicker.js"></script>


    <!-- Document Title
    ============================================= -->
    <title>Denique | Auto Care</title>

</head>

<body class="stretched">
<?php
require "config.php";
$apartmentID = $_POST['ApartmentName'];

$apartmentQuery = "SELECT * FROM `apartment` WHERE `ApartmentID` = '$apartmentID'";
foreach($conn->query($apartmentQuery) as $apartment)
{
	$apartmentName = $apartment['ApartmentName'];
	$apartmentAddress = $apartment['Address'];
	$aStartTime = $apartment['ApartmentStartTime'];
	$aEndTime = $apartment['ApartmentEndTime'];
	$block = $apartment['Block'];
	$status = $apartment['isActive'];
	if($status == TRUE)
	{
		$aStatus = "ACTIVE";
	}else
	{
		$aStatus = "INACTIVE";
	}
}



?>

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
    <!-- #page-title end -->

        <!-- Content
        ============================================= -->
        
		
		<section id="slider" class="slider-parallax full-screen ">

			<div class="slider-parallax-inner">

				<div class="full-screen section nopadding nomargin noborder ohidden" style="background-image: url('pics/4.jpg'); background-size: cover; background-position: top center;">

					<div class="row nomargin" style="position: relative; z-index: 2;">
						<div class="col-sm-offset-6 col-sm-5 full-screen">
							<div class="vertical-middle col-padding">
								<div class="heading-block nobottomborder bottommargin-sm">
									<b class="left" style="font-weight:bold; color:black" >Name of the Apartment :  <span> <?php echo $apartmentName; ?> </span></b>
									 
								</div>
										 
										 <div class="table-responsive">
							<table class="table table-bordered table-striped">
							  <colgroup>
								<col class="col-xs-4">
								<col class="col-xs-8">
							  </colgroup>
							   
							  <tbody>
								<tr>
								  <td>
									 Address
								  </td>
								  <td> <?php echo $apartmentAddress; ?></td>
								</tr>
								<tr>
								  <td>
									Start Time 
								  </td>
								  <td> <?php echo $aStartTime; ?></td>
								</tr>
								<tr>
								  <td>
								End Time 
								  </td>
								   <td> <?php echo $aEndTime; ?></td>
								</tr>
								<tr>
								  <td>
									Type  
								  </td>
								  <td> <?php echo $block; ?></td>
								</tr>
								 
							  </tbody>
							</table>
						  </div>
						  
						  
						   <div class="col_full">
                                <label for="template-contactform-service">List of cleaners  </label>
                                <select name="position" id="position"  tabindex="9" class="sm-form-control required">
									<?php
									$getCleaner = "SELECT * FROM `cleanerapartment` WHERE `ApartmentID`='$apartmentID' AND `isActive`=true" ;
									foreach($conn->query($getCleaner) as $cleanerList)
									{
									$cleanerID =$cleanerList['CleanerID'];
									$cleanerName = $cleanerList['CleanerName'];

									?>
                                    <option value="<?php echo $cleanerID; ?> "><?php echo $cleanerName; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
							
							<div class="col_full center">
								<label for="template-contactform-service">Service status of the Apartment :  </label> <span style="color:brown; font-weight:bold"> <?php echo $aStatus; ?> </span>
						    </div>
						  
						  
						  
						  <div class="center bottommargin-sm">

			<?php
			if($aStatus == "ACTIVE")
			{
			?>
		

	 <a href="deleteApartment.php?id='<?php echo $apartmentID; ?>'" id="apartmentID" name="apartmentID" class="button button-border button-rounded nomargin" style="">Delete Apartment</a>
	 

			<?php
			}
			else
			{

	?>


				<a href="activateApartment.php?id='<?php echo $apartmentID; ?>'" id="apartmentID" name="apartmentID" class="button button-border button-rounded nomargin" style="">Activate Apartment</a>

<?php } ?>

		</div>
						  
						  
						  
						  
					<script>
			$(document).ready(function(){
				$("#deleteApartment").click(function(){

					var apartmentID = $("#apartmentID").val();
					console.log(apartmentID);
					var dataString ='apartmentID='+ apartmentID ;
					$.ajax({
						type: "POST",
						url: "deleteApartment.php",
						data: dataString,
						cache: false,
						success: function (response) {
							document.getElementById("parkingD").innerHTML = response;
							console.log("Success");
							console.log(response);
						}
					});

					return false;
				});
			});


		</script>
			  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
						  
										 
										 
										 
										 
										 
										 
										 
										 
								<div class="center">		 
						 
								<a href="viewBookings.php" class=" notopmargin bottommargin-sm center"><b style="color:black">* Hello Admin, want to go to "View Bookings" ?</b></a>
								</div>
							</div>
						</div>
					</div>

					 

				</div>

			</div>

		</section><!-- #slider end -->
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!--Actual Content-->
		 
	<!--	<script>
			$(document).ready(function(){
				$("#addParking").click(function(){

					var pName = $("#pName").val();
					var pAddress = $("#pAddress").val();
					var pNotes = $("#pNotes").val();
					var apartmentID = $("#apartmentID").val();
					console.log(apartmentID+pName+pAddress+pNotes);
					var dataString ='apartmentID='+ apartmentID +'&pName=' +pName + '&pAddress=' +pAddress+ '&pNotes=' +pNotes ;
					$.ajax({
						type: "POST",
						url: "addParking.php",
						data: dataString,
						cache: false,
						success: function (response) {
							document.getElementById("parkingD").innerHTML = response;
							console.log("Success");
							console.log(response);
						}
					});

					return false;
				});
			});


		</script> -->
	 
		
		
		
		
		
		
		
		
		
		
      
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