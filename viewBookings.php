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

        <div class="content-wrap   nopadding nomargin noborder " style="background-image: url('pics/bg1.jpg'); background-size: cover; background-position: top center;">


            <div class="container clearfix">

                <!-- Postcontent
                ============================================= -->
                <div class=" nobottommargin">

                    <h3>VIEW BOOKINGS</h3>

                    <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>

                    <form class="nobottommargin" id="template-contactform" name="template-contactform" action="#" method="#">

                        <div class="form-process"></div>
                        <div class="col_one_third">

                            <label for="template-contactform-name">Search By Customer Name <small>*</small></label>
                            <select id="SuserID" name="SuserID" value="" class="sm-form-control required" onchange="fetch_cust(this.value);" >
                                <?php
                                require "config.php";
                                $customerQuery = "SELECT `UserID`, `UserName` FROM `user`";
                                foreach($conn->query($customerQuery) as $customerlist)
                                {
                                    $customerID = $customerlist['UserID'];
                                    $customerName = $customerlist['UserName'];
                                ?>
                                <option value="<?php echo $customerID ?> " ><?php echo $customerName; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col_one_third">

                            <label for="template-contactform-name">Search By Date<small>*</small></label>
                            <input type="text" id="Sdate" name="Sdate" value="" class="sm-form-control required" onchange="fetch_date(this.value);" />

                        </div>
                        <div class="col_one_third col_last">

                            <label for="template-contactform-name">Search By Phone<small>*</small></label>
                            <select type="text" id="phone" name="phone" value="" class="sm-form-control required" onchange="fetch_phone(this.value);" >
                                <option value="">Select a Phone Number</option>
                            <?php
                            require "config.php";
                            $customerQuery = "SELECT `UserID`,`userPhone` FROM `user`";
                            foreach($conn->query($customerQuery) as $customerlist)
                            {
                                $customerID = $customerlist['UserID'];
                                $customerPhone = $customerlist['userPhone'];
                                ?>
                                <option value="<?php echo $customerPhone ?> " ><?php echo $customerPhone; ?></option>
                            <?php } ?>
                            </select>
                        </div>


                        <div class="col_one_third">

                            <label for="template-contactform-name">Search By Service Type<small>*</small></label>
                            <select class="sm-form-control" name="serviceType" id="serviceType" onchange="fetch_service(this.value);">
                                <option value="">Select a Service Type</option>
                                <option value="Daily - Exterior" >Daily - Exterior</option>
                                <option value="Daily - Interior" >Daily - Interior</option>
                                <option value="Alternate - Exterior" >Alternate - Exterior</option>
                                <option value="Alternate - Interior" >Alternate - Interior</option>
                                <option value="Weekly - Exterior" >Weekly - Exterior</option>
                                <option value="Weekly - Interior" >Weekly - Interior</option>
                            </select>
                        </div>

                        <div class="col_one_third ">

                            <label for="template-contactform-name">Search by Cleaner<small>*</small></label>
                            <select class="sm-form-control" name="cleanerID" id="cleanerID" onchange="fetch_clean(this.value);">
                                <?php
                                require "config.php";
                                foreach($conn->query("SELECT * FROM `cleaner`") as $cleanerList)
                                {
                                    $cleanerID = $cleanerList['CleanerID'];
                                    $cleanerName = $cleanerList['CleanerName'];
                                ?>
                                <option value="<?php echo $cleanerID; ?> "><?php echo $cleanerName; ?></option>
                                <?php }?>
                                </select>
                        </div>


                        <script>
                            $(function() {
                                $( "#Sdate" ).datepicker({
                                    inline: true,
                                    dateFormat: 'dd-mm-yy'
                                });
                            });

                        </script>



                        <script type="text/javascript">

                            function fetch_phone(val)
                            {
                                $.ajax({
                                    type: 'post',
                                    url: 'getBookingByPhone.php',
                                    data: {
                                        sphone:val
                                    },
                                    success: function (response) {
                                        document.getElementById("Booking").innerHTML=response;
                                        console.log("Success");
                                        console.log(response);
                                    }
                                });
                            }

                            function fetch_cust(val)
                            {
                                $.ajax({
                                    type: 'post',
                                    url: 'getBookingByCust.php',
                                    data: {
                                        SuserID:val
                                    },
                                    success: function (response) {
                                        document.getElementById("Booking").innerHTML=response;
                                        console.log("Success");
                                        console.log(response);
                                    }
                                });
                            }
                            function fetch_service(val)
                            {
                                $.ajax({
                                    type: 'post',
                                    url: 'getBookingByService.php',
                                    data: {
                                        type:val
                                    },
                                    success: function (response) {
                                        document.getElementById("Booking").innerHTML=response;
                                        console.log("Success");
                                        console.log(response);
                                    }
                                });
                            }

                            function fetch_apt(val)
                            {
                                $.ajax({
                                    type: 'post',
                                    url: 'getBookingByApt.php',
                                    data: {
                                        ApartmentID:val
                                    },
                                    success: function (response) {
                                        document.getElementById("Booking").innerHTML=response;
                                        console.log("Success");
                                        console.log(response);
                                    }
                                });
                            }

                            function fetch_clean(val)
                            {
                                $.ajax({
                                    type: 'post',
                                    url: 'getBookingByClean.php',
                                    data: {
                                        cleanerID:val
                                    },
                                    success: function (response) {
                                        document.getElementById("Booking").innerHTML=response;
                                        console.log("Success");
                                        console.log(response);
                                    }
                                });
                            }

                            function fetch_date(val)
                            {
                                $.ajax({
                                    type: 'post',
                                    url: 'getBookingByDate.php',
                                    data: {
                                        date:val
                                    },
                                    success: function (response) {
                                        document.getElementById("Booking").innerHTML=response;
                                        console.log("Success");
                                        console.log(response);
                                    }
                                });
                            }

                            function fetch_date(val)
                            {
                                $.ajax({
                                    type: 'post',
                                    url: 'getBookingByDate.php',
                                    data: {
                                        date:val
                                    },
                                    success: function (response) {
                                        document.getElementById("Booking").innerHTML=response;
                                        console.log("Success");
                                        console.log(response);
                                    }
                                });
                            }


                        </script>
                       
                        <div class="col_one_third col_last bottommargin">

                            <label for="template-contactform-name">Select Apartment<small>*</small></label>
                            <select class="sm-form-control" name="ApartmentName" id="ApartmentName" onchange="fetch_apt(this.value);">
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
						
						<div class="line"></div>
                        <div class="col_one_fourth">
                            <button class="button button-border button-rounded nomargin " type="submit" id="submitCD" name="submitCD" value="submit">CLEANER and DATE</button>
                        </div>
                        <div class="col_one_fourth">
                            <button class="button button-border button-rounded nomargin " type="submit" id="submitAD" name="submitAD" value="submit">APARTMENT and DATE</button>
                        </div>
                        <div class="col_one_fourth">
                            <button class="button button-border button-rounded nomargin " type="submit" id="submitADS" name="submitADS" value="submit">APARTMENT DATE SERVICE</button>
                        </div>
                        <div class="col_one_fourth col_last bottommargin">
                            <button class="button button-border button-rounded nomargin " type="submit" id="submitPS" name="submitPS" value="submit">PHONE AND SERVICE</button>
                        </div>
                        <script>
                            $(document).ready(function(){
                                $("#submitPS").click(function(){

                                    var service = $("#serviceType").val();
                                    var phone = $("#phone").val();
                                    console.log(service + phone);
                                    var dataString ='phone='+ phone + '&service=' + service ;
                                    $.ajax({
                                        type: "POST",
                                        url: "PSSearch.php",
                                        data: dataString,
                                        cache: false,
                                        success: function (response) {
                                            document.getElementById("Booking").innerHTML = response;
                                            console.log("Success");
                                            console.log(response);
                                        }
                                    });

                                    return false;
                                });
                            });


                        </script>
                        <script>
                            $(document).ready(function(){
                                $("#submitAD").click(function(){

                                    var date = $("#Sdate").val();

                                    var apartment = $("#ApartmentName").val();
                                    console.log(apartment+date);
                                    var dataString ='date='+ date + '&apartment='+ apartment ;
                                        $.ajax({
                                            type: "POST",
                                            url: "adsearch.php",
                                            data: dataString,
                                            cache: false,
                                            success: function (response) {
                                                document.getElementById("Booking").innerHTML = response;
                                                console.log("Success");
                                                console.log(response);
                                            }
                                        });

                                    return false;
                                });
                            });


                        </script>
                        <script>
                            $(document).ready(function(){
                                $("#submitADS").click(function(){

                                    var date = $("#Sdate").val();
                                    var service = $("#serviceType").val();
                                    var apartment = $("#ApartmentName").val();
                                    console.log(apartment+date);
                                    var dataString ='date='+ date + '&apartment='+ apartment + '&service=' + service ;
                                    $.ajax({
                                        type: "POST",
                                        url: "apartDateSerSearch.php",
                                        data: dataString,
                                        cache: false,
                                        success: function (response) {
                                            document.getElementById("Booking").innerHTML = response;
                                            console.log("Success");
                                            console.log(response);
                                        }
                                    });

                                    return false;
                                });
                            });


                        </script>
                        <script>
                            $(document).ready(function(){
                                $("#submitCD").click(function(){

                                    var date = $("#Sdate").val();

                                    var cleaner = $("#cleanerID").val();
                                    console.log(cleaner+date);
                                    var dataString ='date='+ date + '&cleaner='+ cleaner ;
                                    $.ajax({
                                        type: "POST",
                                        url: "cdsearch.php",
                                        data: dataString,
                                        cache: false,
                                        success: function (response) {
                                            document.getElementById("Booking").innerHTML = response;
                                            console.log("Success");
                                            console.log(response);
                                        }
                                    });

                                    return false;
                                });
                            });


                        </script>
<div class="line"></div>
                        <div class="col_full">
                           <div class="accordion accordion-bg clearfix">
                                <label for="template-contactform-name">Booking Details<small>*</small></label>
                                <div name="Booking" id="Booking" >

                                </div>

                            </div>
                        </div>
                        <div class="col_full">
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