<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 2/27/2016
 * Time: 4:35 PM
 */
require "config.php";
$month = $_POST['month'];
$year = $_POST['year'];
$service = $_POST['service'];
if($service == "Daily")
{
    $query = "SELECT * FROM `user` WHERE `ServiceType` =1";
}
if($service == "Alternate")
{
    $query = "SELECT * FROM `user` WHERE `ServiceType` =2 ";
}
if($service == "Weekly")
{
    $query = "SELECT * FROM `user` WHERE `ServiceType` =3 ";
}
foreach($conn->query($query) as $customer) {
    $customerID = $customer['UserID'];
    $booking = "SELECT * FROM `booking` WHERE `UserID` = '$customerID' AND `Month` = '$month' AND `Year` = '$year'";
    foreach ($conn->query($booking) as $book) {
        $customerName = $book['UserName'];
        $apartmentID = $book['ApartmentID'];
        $getApartment = "SELECT * FROM `apartment` WHERE `ApartmentID` = '$apartmentID'";
        foreach ($conn->query($getApartment) as $apartment) {
            $apartmentName = $apartment['ApartmentName'];
        }

    }
    $bookqueryExt = "SELECT * FROM `booking` WHERE `UserID` = '$customerID' AND `SendMessage` = TRUE  AND (`ServiceType`=\"Daily - Exterior\" OR `ServiceType`=\"Alternate - Exterior\" OR `ServiceType`=\"Weekly - Exterior\") AND `Month` = '$month' AND  `Year` = '$year'";
    $res1 = $conn->query($bookqueryExt);
    $num_Ext_Booking = mysqli_num_rows($res1);
    $bookqueryInt = "SELECT * FROM `booking` WHERE `UserID` = '$customerID' AND `SendMessage` = TRUE  AND (`ServiceType`=\"Daily - Interior\" OR `ServiceType`=\"Alternate - Interior\" OR `ServiceType`=\"Weekly - Interior\") AND `Month` = '$month' AND  `Year` = '$year'";
    $res1 = $conn->query($bookqueryExt);
    $num_Int_Booking = mysqli_num_rows($conn->query($bookqueryInt));
    if ($num_Ext_Booking > 0 && $num_Int_Booking > 0) {


        echo "<tr class=\"cart_item center\"><td class=\"cart-product-name\">" . $customerName . "</td><td>" . $apartmentName . "</td>";
    }
}

?>