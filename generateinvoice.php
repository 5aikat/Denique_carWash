<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 3/23/2016
 * Time: 12:53 AM
 */
require "config.php";
$month = $_POST['month'];
$year = $_POST['year'];

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
    echo "<tr><td>".$num."</td>
                                        <td id=\"name\" name=\"name\">".$name."</td>
                                        <td>".$carModel."</td>
                                        <td>".$regNo."</td>
                                        <td>".$service."</td>
                                        <td>".$num_Int_Booking."</td>
                                        <td>".$num_Ext_Booking."</td>
                                        <td>".$interiorCost."</td>
                                        <td>".$exteriorCost."</td>
                                        <td>".$total."</td>
                                        <td>0</td>
                                        <td> :) </td>
                                        <td><a href=\"emailinvoice.php?name=$name&email=$email&month=$month&year=$year&carmodel=$carModel&regno=$regNo&service=$service&intBook=$num_Int_Booking&extBook=$num_Ext_Booking&intCost=$interiorCost&extCost=$exteriorCost&total=$total\" class=\"button button-mini button-border button-rounded\"><span><i class=\"icon-gift\"></i>Send Email</span></button></td></tr>";

    $num = $num +1;
}
}





//INSERT INTO `invoice`(`UserName`, `UserID`, `StartDate`, `EndDate`, `userPhone`, `email`, `CarMake`, `CarModel`, `ReegistrationNo`, `CleanerName`, `CleanerID`, `interiorCost`, `interiorBooking`, `exteriorCost`, `exteriorBooking`, `Discount`, `Total`, `ApartmentName`, `FlatNo`) VALUES (

?>