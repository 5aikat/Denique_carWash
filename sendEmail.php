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
	<title>Denique</title>

</head>

<body class="stretched">

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
		
		
		<h4 class="left">Welcome Back ! <br>
		<span> It is time to send the schedule.</span></h4> 
		
		<div class="line topmargin-lg bottommargin-lg"></div> 
		
		<form action="send_email.php" method="post">
		 <div class="col_one_third">
                                <label for="template-contactform-service">Choose Service Type: </label>
                                <select name="service" id="service"  tabindex="9" class="sm-form-control required">
                                     <option>Select an option</option>
                                    <option value="Daily">Daily Cleaning</option>
                                    <option value="Alternate">Alternate Day Cleaning</option>
                                    <option value="Weekly">Weekly Cleaning</option>
                                  
                                </select>
                            </div>

							
							<div class="clear"></div>

							
							
							<div class="clear"></div>
							<h4 class="left">Details of the Customer : </h4>



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
						 
						 
						 


                        </div>

                           
							
     <div class="clear"></div>
	 
	 
		 	<div class="line bottommargin-sm"></div>
		
		
		<div class="center bottommargin-lg">
	 <input type="submit" class="button button-3d nomargin" value="Send Email" />
	 
	 </div>

		</form>
		
		</div>


		<script>
			$(document).ready(function(){
				$("#service").change(function(){

					var service = $("#service").val();
					console.log(service);
					var dataString ='service=' + service;
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

  </div><!-- #wrapper end -->

    <!-- Go To Top
    ============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- Footer Scripts
    ============================================= -->
    <script type="text/javascript" src="js/functions.js"></script>

</body>
</html>