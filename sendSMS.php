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




<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 2/24/2016
 * Time: 6:27 PM

**/
?>


<section id="slider" class="slider-parallax full-screen ">

			<div class="slider-parallax-inner">

				<div class="full-screen section nopadding nomargin noborder ohidden" style="background-image: url('pics/4.jpg'); background-size: cover; background-position: top center;">

					<div class="row nomargin" style="position: relative; z-index: 2;">
						<div class="col-sm-offset-6 col-sm-5 full-screen">
							<div class="vertical-middle col-padding">
								 <div class="postcontent nobottommargin">

                    
                    <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

                    <form class="nobottommargin" id="template-contactform" name="template-contactform" action="SMS.php" method="post">

                        <div class="form-process"></div>
                        <p style="color:brown; font-weight:bold">Send SMS to Customer  ( Interior Washing )</p>
                        <div class="col_one_third col_last">
                            <label for="template-contactform-name">Select Date  <small>*</small></label><br/>
                         <input type="text" id="Sdate" name="Sdate" value="" class="sm-form-control required" onchange="fetch_date(this.value);" />
                            </div>
                        <script>
                            $(function() {
                                $( "#Sdate" ).datepicker({
                                    inline: true,
                                    minDate:0,
                                    dateFormat: 'dd-mm-yy'
                                });
                            });

                        </script>
                        <br/>
                        <div class="clear"></div>
                        <div class="col_one_third col_last">
                        <select class="sm-form-control" name="customerList" id="customerList">

                        </select>
                            </div>
                    <script>
                        function fetch_date(val)
                        {
                            $.ajax({
                                type: 'post',
                                url: 'getInteriorList.php',
                                data: {
                                    date:val
                                },
                                success: function (response) {
                                    document.getElementById("customerList").innerHTML=response;
                                    console.log("Success");
                                    console.log(response);
                                }
                            });
                        }

                    </script>
                        <div class="clear"></div>
                        <div class="col_half">
                            <p>*Please make sure you have CANCELLED the booking from "VIEW BOOKING" page to prevent sending an SMS</p>
                            </div>
                        <div class="col_full">
                            <button class="button button-border button-rounded nomargin " type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
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
							</div>
						</div>
					</div>

					 

				</div>

			</div>

		</section><!-- #slider end -->


































































































































    

    <!-- Footer
		============================================= -->
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