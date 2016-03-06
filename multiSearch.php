<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 2/26/2016
 * Time: 7:33 PM
 */


require "config.php";
if(!empty($_POST['customerName']))
{
    $customerName = $_POST['customerName'];
}
if(!empty($_POST['date']))
{
    $date = $_POST['date'];
}
if(!empty($_POST['apartment']))
{
    $apartment = $_POST['apartment'];
}
if(!empty($_POST['cleaner']))
{
    $cleaner = $_POST['cleaner'];
}
if(!empty($_POST['service']))
{
    $serviceType = $_POST['service'];
}



if(!empty($_POST['customerName'])  ) {
    $bookingQuery = "Select * FROM booking WHERE `UserName` = '$customerName'";

}

if(!empty($_POST['customerName']) && !empty($_POST['date']) ) {
    $bookingQuery = "Select * FROM booking WHERE `UserName` = '$customerName' AND `Day` = '$date'";

}
if(!empty($_POST['customerName']) && !empty($_POST['date']) && !empty($_POST['apartment'])  ) {
    $bookingQuery = "Select * FROM booking WHERE `UserName` = '$customerName' AND `Day` = '$date' AND `ApartmentID` = '$apartment'";

}
if(!empty($_POST['customerName']) && !empty($_POST['date']) && !empty($_POST['apartment']) && !empty($_POST['cleaner']) ) {
    $bookingQuery = "Select * FROM booking WHERE `UserName` = '$customerName' AND `Day` = '$date' AND `ApartmentID` = '$apartment' AND `CleanerName` = '$cleaner' ";

}
if(!empty($_POST['customerName']) && !empty($_POST['date']) && !empty($_POST['apartment']) && !empty($_POST['cleaner']) && !empty($_POST['service']) ) {
    $bookingQuery = "Select * FROM booking WHERE  `ServiceType` = '$serviceType' AND `UserName` = '$customerName' AND `Day` = '$date' AND `ApartmentID` = '$apartment' AND `CleanerName` = '$cleaner' ";

}


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