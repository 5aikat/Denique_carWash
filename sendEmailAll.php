<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 4/23/2016
 * Time: 11:36 AM
 */
require "config.php";
# Include the Autoloader (see "Libraries" for install instructions)
require 'mailgun-php/vendor/autoload.php';
use Mailgun\Mailgun;

$month = $_POST['billMonth'];
$year = $_POST['billYear'];

$num = 1;
$bookingquery = "SELECT * FROM `user` WHERE `isActive` = TRUE";
foreach($conn->query($bookingquery) as $user) {
    $UserID = $user['UserID'];
    $userdetail = "SELECT * FROM `user` WHERE `UserID` = '$UserID'";
    foreach ($conn->query($userdetail) as $cust) {

        $apartmentID = $cust['ApartmentID'];
        $cleanerID = $cust['CleanerID'];
        $apartmentQuery = "SELECT `ApartmentName`,`Address` FROM `apartment` WHERE `ApartmentID` = '$apartmentID'";
        foreach ($conn->query($apartmentQuery) as $apart) {
            $ApartmentName = $apart['ApartmentName'];
            $Address = $apart['Address'];
        }
        if ($cust['ServiceType'] == '1') {
            $service = "Daily";
        }
        if ($cust['ServiceType'] == '2') {
            $service = "Alternate";
        }
        if ($cust['ServiceType'] == '3') {
            $service = "Weekly";
        }

        $cleanerQuery = "SELECT * FROM `cleaner` WHERE `CleanerID` ='$cleanerID'";
        foreach ($conn->query($cleanerQuery) as $clean) {
            $cleaner = $clean['CleanerName'];
        }
        $email = $cust['emailID'];
        $name = $cust['UserName'];
        $flatNo = $cust['flatNo'];
        $interiorCost = $cust['interiorCost'];
        $exteriorCost = $cust['exteriorCost'];
        $phone = $cust['userPhone'];
        $email = $cust['emailID'];
        $carMake = $cust['CarMake'];
        $carModel = $cust['CarModel'];
        $regNo = $cust['RegistrationNo'];
    }

    $bookqueryExt = "SELECT * FROM `booking` WHERE `UserID` = '$UserID' AND `SendMessage` = TRUE  AND (`ServiceType`=\"Daily - Exterior\" OR `ServiceType`=\"Alternate - Exterior\" OR `ServiceType`=\"Weekly - Exterior\") AND `Month` = '$month' AND  `Year` = '$year'";
    $res1 =$conn->query($bookqueryExt);
    $num_Ext_Booking = mysqli_num_rows($res1);
    $bookqueryInt = "SELECT * FROM `booking` WHERE `UserID` = '$UserID' AND `SendMessage` = TRUE  AND (`ServiceType`=\"Daily - Interior\" OR `ServiceType`=\"Alternate - Interior\" OR `ServiceType`=\"Weekly - Interior\") AND `Month` = '$month' AND  `Year` = '$year'";
    $res1 =$conn->query($bookqueryExt);
    $num_Int_Booking =  mysqli_num_rows($conn->query($bookqueryInt));

    $discount = 0;
    $total = ($num_Ext_Booking * $exteriorCost)+ ($num_Int_Booking * $interiorCost);
    if($num_Ext_Booking > 0 && $num_Int_Booking > 0){



# Instantiate the client.
        $mgClient = new Mailgun('key-29c0800cd3318fb806f3d7445f5273c3');
        $domain = "sandboxd5ae0d7ddb8848ac923464b48e2127d2.mailgun.org";

# Make the call to the client.
        $result = $mgClient->sendMessage("$domain",
            array('from'    => 'Denique AutoCare <postmaster@sandboxd5ae0d7ddb8848ac923464b48e2127d2.mailgun.org>',
                'to'      => ''.$name.'<' .$email. '>',
                'subject' => '' .$name.' : Your invoice for '.$month.' - '.$year.'' ,
                'text'    => 'Your invoice Details for the month of '.$month.' , '.$year.' is as follows :

Car : '.$carModel.'
Registration No : '.$regNo.'
Service Type : '.$service.'
Total Interior Bookings (Rs '.$interiorCost.' each) : '.$num_Int_Booking .'
Total Exterior Bookings (Rs '.$exteriorCost.' each) : '.$num_Ext_Booking .'
Total Bill : Rs '.$total .'

Regards
Denique AutoCare'));
        $num = $num +1;
    }
}
echo "Emails send successfully . Redirecting .....";
header('Location:'.'home.html');
?>