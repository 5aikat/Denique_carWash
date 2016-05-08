<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 4/24/2016
 * Time: 3:33 PM
 */

require "config.php";
$date = $_POST['sdate'];
echo "Sending SMS to cleaners for booking on " .$date. " ..... Sending ... ";
$bookingQuery = "SELECT * FROM `booking` WHERE `Day`='$date'";

foreach($conn->query($bookingQuery) as $booking) {

    $time = $booking['Time'];
    $userName = $booking['UserName'];
    $cleanerName = $booking['CleanerName'];
    $userPhone = $booking['userPhone'];
    $cleanerPhone = $booking['cleanerPhone'];
    $car = $booking['carMake']." ".$booking['carModel'];
    $parking = $booking['Parking'];
    $apartmentID = $booking['ApartmentID'];
    $aquery = "SELECT * FROM `apartment` WHERE `ApartmentID` = '$apartmentID'";
    foreach($conn->query($aquery) as $apart){
        $apartment = $apart['ApartmentName'];
    }
    $msgtxt="Time: ".$time.";Cust Name: ".$userName."; Car :".$car.";parking : ".$parking.";Apartment : ".$apartment."Registration No :".$booking['registrationNo']."";
    $ch = curl_init();
    $user="vinay.denique@gmail.com:Danny@123";
    $receipientno=$cleanerPhone;
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
header('Location:'.'home.html');
?>