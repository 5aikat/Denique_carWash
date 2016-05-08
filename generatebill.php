<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 3/23/2016
 * Time: 12:45 AM
 */

?>



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
    <script type="text/javascript" src="js/date.js"></script>
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

    <!-- Page Title
    ============================================= -->





    <!-- Actual Content
    ============================================= -->
    <section id="slider" class=" ">

        <div class="">

            <div class="  nopadding nomargin noborder " style="background-image: url('pics/bg1.jpg'); background-size: cover; background-position: top center;">

                <!-- Postcontent
                ============================================= -->
                <div class="  container topmargin-lg nobottommargin">

                    <h3 class="topmargin-lg">Generate Bill</h3>

                    <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

                    <form class="nobottommargin" id="template-contactform" name="template-contactform" action="addUser.php" method="post">

                        <div class="form-process"></div>


                        <div class="line"></div>
                        <div class="col_one_fourth">
                            <label for="template-contactform-name">Month<small>*</small></label>
                            <select name="month" id="month">
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
							<option value="2016">2016</option>
							</select>
                        </div>

                      

                        <div class="clear"></div>

                        <div class="col_one_fourth">
                            <a class="button button-3d nomargin" type="submit" id="viewBill" name="viewBill" value="submit">View All Bills</a>
                        </div>


                        <div class="clear"></div>

                        <script>
                            $(document).ready(function(){
                                $("#viewBill").click(function(){

                                    var start = $("#month").val();
                                    var end = $("#year").val();
                                    $("#billMonth").val(start);
                                    $("#billYear").val(end);
                                    console.log(start + end);
                                    var dataString ='month='+ start + '&year=' + end ;
                                    $.ajax({
                                        type: "POST",
                                        url: "generateinvoice.php",
                                        data: dataString,
                                        cache: false,
                                        success: function (response) {
                                            document.getElementById("output").innerHTML = response;
                                            console.log("Success");
                                            console.log(response);
                                        }
                                    });

                                    return false;
                                });
                            });


                        </script>

                    </form>

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
                    <form action="sendEmailAll.php" method="post">
                        <div class="topmargin-lg bottommargin-lg">
                            <div class="table-responsive">
                                <table class="table table-bordered nobottommargin">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>V. Name</th>
                                        <th>V. No.</th>
                                        <th>Service</th>
                                        <th>Interior Wash</th>
                                        <th>Exterior Wash </th>
                                        <th>I W Cost</th>
                                        <th>E W  Cost</th>
                                        <th>Total Bill  </th>
                                        <th>Discount  </th>
                                        <th>Notes </th>
                                        <th>Send </th>
                                    </tr>
                                    </thead>
                                    <tbody id="output" >


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="clear"></div>

                        <div class="col_one_fourth">
                            <input type="hidden" id="billMonth" name="billMonth"/>
                            <input type="hidden" id="billYear" name="billYear" />
                            <button class="button button-3d nomargin" type="submit" id="sendAll" name="send All" >Send Email to All</button>
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
                </div>

            </div><!-- .postcontent end -->


            <a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="65" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

        </div>

</div>

</section><!-- #slider end -->

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
