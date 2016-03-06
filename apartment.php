<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Sands Zenith" />

    <!-- Stylesheets
    ============================================= -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!--[if lt IE 9]>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

    <!-- Document Title
    ============================================= -->
	<title>Apartment Details</title>

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
       <header id="header" class="full-header no-sticky" >
 
			<div id="header-wrap">

				<div class="container clearfix">

				 

					<!-- Logo
					============================================= -->
					<!--<div id="logo" class="leftmargin">
						<a href="index.html" class="standard-logo" data-dark-logo="pics/logo.jpg"><img src="pics/logo.jpg" alt=" Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="pics/logo.jpg"><img src="pics/logo.jpg" alt="Logo"></a>
					
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					 
				</div>

			</div>
 
		</header><!-- #header end -->
	 
		 <!-- Page Title
        ============================================= -->
    <!-- #page-title end -->

        <!-- Content
        ============================================= -->
        
		
		
		<div class="container topmargin-lg">

		<h4 class="left">Name of the Apartment :  <span> <?php echo $apartmentName; ?> </span></h4>
		
		<div class="line topmargin-lg bottommargin-lg"></div> 
		
			<div class="table-responsive">
							<table class="table table-bordered table-striped">
							  <colgroup>
								<col class="col-xs-2">
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
									Name of the Block  
								  </td>
								  <td> <?php echo $block; ?></td>
								</tr>
								 
							  </tbody>
							</table>
						  </div>
						  
						  
						  <div class="col_one_third">
                                <label for="template-contactform-service">Cleaner  </label>
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
							
							<div class="col_one_third">
								<label for="template-contactform-service">Service status of the Apartment :  </label> <span> <?php echo $aStatus; ?> </span>
						    </div>
							
							<div class="col_one_third col_last">
						    </div>


			<!--		<div class="clear"></div>
							<h4 class="left">Parking Details</h4>
							
							
							
								<div class="table-responsive bottommargin">

						<table class="table cart">
							<thead>
								<tr>
									 
									 
									<th class="cart-product-price left ">Parking Name</th>
									<th class="cart-product-quantity left ">Address</th>
									<th class="cart-product-subtotal left ">Notes</th>
								</tr>
							</thead>
							<tbody id="parkingD">

									 <?php
									// $getParking = "SELECT * FROM `parking` WHERE `ApartmentID`='$apartmentID'";
									// foreach($conn->query($getParking) as $parking)
									// {
									//	 $parkingID = $parking['ParkingID'];
									//	 $parkingName = $parking['ParkingName'];
									//	 $parkingAddress = $parking['ParkingAddress'];
									//	 $parkingNotes = $parking['Notes'];


									 ?>

									 <tr class="cart_item center">

									<td class="cart-product-name">
										<?php// echo $parkingName; ?>
									</td>

									<td class="cart-product-name">
										<?php //echo $parkingAddress; ?>
									</td>

									<td class="cart-product-name">
										<?php // echo $parkingNotes; ?>
									</td>
									 </tr>

									 <?php //} ?>

								 
								 
							 
											
									 
							</tbody>

						</table>
						
						</div>
					<h4>Add New Parking Below :</h4>
						<div class="col_one_third topmargin-sm">
                                <label for="template-contactform-name">Parking Name <small>*</small></label>
							<input type="hidden" value=" <?php // echo $apartmentID; ?>" id="apartmentID" name="apartmentID" />
                                <input type="text" id="pName" name="pName" value="" class="sm-form-control required" />
                            </div>

                            <div class="col_one_third topmargin-sm ">
                                <label for="template-contactform-name">Address <small>*</small></label>
                                <input type="text" id="pAddress" name="pAddress" value="" class="sm-form-control required" />
                            </div>

                        

                            <div class="col_one_third col_last topmargin-sm">
                                <label for="template-contactform-email">Notes <small>*</small></label>
                                <input type="text" id="pNotes" name="pNotes" value="" class="sm-form-control required" />
                            </div> -->
							
     <div class="clear"></div>
	 
	 <div class="center">
	 <button id="addParking"  name="addParking" class="button button-3d nomargin">Add New Parking</button>
	 
	 </div>
					
					 <div class="line topmargin-lg bottommargin-lg"></div>
			<div class="center bottommargin-lg">

			<?php
			if($aStatus == "ACTIVE")
			{
			?>
		

	 <a href="deleteApartment.php?id='<?php echo $apartmentID; ?>'" id="apartmentID" name="apartmentID" class="button button-3d nomargin" style="background-color:brown">Delete Apartment</a>
	 

			<?php
			}
			else
			{

	?>


				<a href="activateApartment.php?id='<?php echo $apartmentID; ?>'" id="apartmentID" name="apartmentID" class="button button-3d nomargin" style="background-color:brown">Activate Apartment</a>

<?php } ?>

		</div>
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
		
		
		
		
		
		
		
		
		
		
      
	   <!-- Footer
        ============================================= -->
<footer id="footer" class="dark" style="background-color:#1F3C61">

            

            <!-- Copyrights
            ============================================= -->
            <div id="copyrights">

                <div class="container clearfix">

                    <div class="col_half" style="color:white">
                        Copyrights &copy; 2016 All Rights Reserved by Denique<br>
                        <div class="copyright-links">Designed & Developed By : <a href="http://www.sandszenith.com" style="color:#fff"> Sands Zenith</a></div>
                    </div>

                    <div class="col_half col_last tright">
                   

                        <div class="clear" ></div>

					</div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

  <!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="js/functions.js"></script>

</body>
</html>