<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 2/26/2016
 * Time: 8:19 PM
 */
require "config.php";

$phone = $_POST['phone'];
$service = $_POST['service'];

$bookingQuery = "SELECT * FROM booking WHERE `userPhone` = +'$phone' AND `ServiceType` = '$service'";
foreach($conn->query($bookingQuery) as $bookings)
{

    echo "<div class='acctitle'><i class='acc-closed icon-ok-circle'></i><i class='acc-open icon-remove-circle'></i>
        ".$bookings['BookingID']."
        <div class='acc_content clearfix'>
            Date : ".$bookings['Day']."<br/>
            Customer Name : ".$bookings['UserName']."<br/>
            Customer Phone : ".$bookings['userPhone']."<br/>
            CleanerName : ".$bookings['CleanerName']."<br/>
            Service Type : ".$bookings['ServiceType']."<br/>
            Time : ".$bookings['Time']."<br/>
            Car Make : ".$bookings['carMake']."<br/>
            Car Model : ".$bookings['carModel']."<br/>
            Registration Number : ".$bookings['registrationNo']."<br/>
            Car Color : ".$bookings['carColor']."<br/>
            Parking : ".$bookings['Parking']."<br/>
         ";
    if($bookings['sendMessage'] == True)
    {
        echo "<a href='changeBooking.php?i=1&id=".$bookings['BookingID']."' class=\"button button-3d notopmargin fright\"style=\"background: linear-gradient(to right, #095764 , #159c7c);font-weight:bold; color:yellow\" >Cancel Booking </a></div>
        </div>";
    }
    if($bookings['sendMessage'] == False)
    {
        echo "<a href='changeBooking.php?i=2&id=".$bookings['BookingID']."' class=\"button button-3d notopmargin fright\"style=\"background: linear-gradient(to right, #095764 , #159c7c);font-weight:bold; color:yellow\" >Re-Accept Booking </a></div>
        </div>";
    }

}

?>