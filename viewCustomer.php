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



    <?php
    /**
     * Created by PhpStorm.
     * User: Shaky
     * Date: 2/24/2016
     * Time: 1:14 PM
     */
    ?>


    <!-- Content
            ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Postcontent
                ============================================= -->
                <div class="postcontent nobottommargin">

                    <h3>VIEW Customers</h3>

                    <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>
                    <form class="nobottommargin" id="template-contactform" name="template-contactform" action="#" method="#">

                        <div class="form-process"></div>
                        <div class="col_one_third">

                            <label for="template-contactform-name">Search Customer<small>*</small></label>
                                <input size="100" type="text" id="customer" name="customer" placeholder="Search by CustomerName or PhoneNumber or email id" />
                            </div>
                        <div class="col_full">
                        </div>
                        <div class="col_one_third">
                            <button class="button button-3d nomargin" type="submit" id="searchCust" name="searchCust" value="submit">Search Customer</button>
                        </div>

                        <div class="col_full">
                                <div name="customerDetail" id="customerDetail" >


                                </div>
                        </div>
                        <div class="col_full">
                        </div>
                        <script>
                            $(document).ready(function(){
                                $("#searchCust").click(function(){

                                    var customer = $("#customer").val();

                                    console.log(customer );
                                    var dataString ='customer='+ customer;
                                    $.ajax({
                                        type: "POST",
                                        url: "custSearch.php",
                                        data: dataString,
                                        cache: false,
                                        success: function (response) {
                                            document.getElementById("customerDetail").innerHTML = response;
                                            console.log("Success");
                                            console.log(response);
                                        }
                                    });

                                    return false;
                                });
                            });


                        </script>
                        </form>




                </div>

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