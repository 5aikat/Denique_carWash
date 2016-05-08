<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 4/23/2016
 * Time: 12:06 PM
 */

?>
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

                    <form action="sendcleanersms.php" method="post">

                        <div class="col_one_third">

                            <label for="template-contactform-name">Choose Date<small>*</small></label>
                            <input type="text" id="sdate" name="sdate" value="" class="sm-form-control required" onchange="fetch_date(this.value);" />

                        </div>


                        <div class="clear"></div>



                        <div class="clear"></div>

                        <div class="clear"></div>


                        <div class="line bottommargin-sm"></div>


                        <div class="center bottommargin-lg">
                            <input type="submit" class="button button-border button-rounded nomargin" value="Send SMS" />

                        </div>

                    </form>
                    <script>
                        $(function() {
                            $( "#sdate" ).datepicker({
                                inline: true,
                                dateFormat: 'dd-mm-yy'
                            });
                        });

                    </script>




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
