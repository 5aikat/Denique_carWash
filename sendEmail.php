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
     <header id="header" class="transparent-header page-section dark no-sticky" >

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
	 
	      <section id="content">

        <div class="content-wrap   nopadding nomargin noborder " style="background-image: url('pics/bg1.jpg'); background-size: cover; background-position: top center;">


            <div class="container clearfix">

                <!-- Postcontent
                ============================================= -->
                <div class=" nobottommargin">
		
		
		<h4 class="left topmargin">  <br>
		<span style="color:black"> It is time to send the schedule.</span></h4> 
		
		<div class="line topmargin-lg bottommargin-lg"></div> 
		
		<form action="sendschedule.php" method="post">
		 <div class="col_one_third">
                                <label for="template-contactform-service">Choose Service Type: </label>
                                <select name="service" id="service"  tabindex="9" class="sm-form-control required">
                                     <option>Select an option</option>
                                    <option value="Daily">Daily Cleaning</option>
                                    <option value="Alternate">Alternate Day Cleaning</option>
                                    <option value="Weekly">Weekly Cleaning</option>
                                  
                                </select>
                            </div>
			<div class="line"></div>
			<div class="col_one_fourth">
				<label for="template-contactform-name">Month<small>*</small></label>
				<select name="month" id="month">
					<option value="select">Select</option>
					<option value="January">January</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
				</select>

			</div>


			<div class="col_one_fourth ">
				<label for="template-contactform-name">Year<small>*</small></label>
				<select id="year" name="year" >
					<option value="Select">Select</option>
					<option value="2016">2016</option>
				</select>
			</div>
							
							<div class="clear"></div>

							
							
							<div class="clear"></div>

				</div>
				<div class="center bottommargin-lg">
					<input id="list" name="list" type="submit" class="button button-border button-rounded nomargin" value="View List" />

				</div>


				<div class="table-responsive bottommargin">

				<table class="table cart">
					<thead>
					<tr>


						<th class="cart-product-price left ">Customer Name</th>
						<th class="cart-product-quantity left ">Apartment</th>
					</tr>
					</thead>
					<tbody id="customers">

					</tbody>
					</table>
						 
						 
						 




                           
							
     <div class="clear"></div>
	 
	 
		 	<div class="line bottommargin-sm"></div>
		
		
		<div class="center bottommargin-lg">
	 <input type="submit" class="button button-border button-rounded nomargin" value="Send Email" />
	 
	 </div>

		</form>
		
	 


		<script>
			$(document).ready(function(){
				$("#list").click(function(){
					var month = $("#month").val();
					var year = $("#year").val();
					var service = $("#service").val();
					console.log(service);
					var dataString ='service=' + service + '&month='+month+'&year='+year;
					$.ajax({
						type: "POST",
						url: "searchCust.php",
						data: dataString,
						cache: false,
						success: function (response) {
							document.getElementById("customers").innerHTML = response;
							console.log("Success");
							console.log(response);
						}
					});

					return false;
				});
			});


		</script>
		</div>
		</div>
		</div>
		</section>

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