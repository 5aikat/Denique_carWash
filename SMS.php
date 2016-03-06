<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 2/25/2016
 * Time: 8:25 PM
 */
require "config.php";
$date = $_POST['Sdate'];

$interiorBooking = "Select * FROM booking WHERE `Day` ='$date' AND (`ServiceType`=\"Daily - Interior\" OR `ServiceType`=\"Alternate - Interior\" OR `ServiceType`=\"Weekly - Interior\")";

foreach($conn->query($interiorBooking) as $booking)
{
   $time = $booking['Time'];
    $userName = $booking['UserName'];
    $cleanerName = $booking['CleanerName'];
    $userPhone = $booking['userPhone'];
    $cleanerPhone = $booking['cleanerPhone'];
    $car = $booking['carMake']." ".$booking['carModel'];
    $msgtxt="Dear ".$userName.".This is a reminder of Interior Cleaning scheduled for your vehicle (".$car.") tomorrow.";
    $ch = curl_init();
    $user="vinay.denique@gmail.com:Danny@123";
    $receipientno=$userPhone;
    $senderID="TEST SMS";

    curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
    $buffer = curl_exec($ch);
    if(empty ($buffer))
    {
        echo " buffer is empty ";
    }
    else
    {
        echo $buffer;
    }
    curl_close($ch);

}

?>