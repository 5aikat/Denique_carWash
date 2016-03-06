<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 2/27/2016
 * Time: 4:35 PM
 */
require "config.php";

$service = $_POST['service'];
if($service == "Daily")
{
    $query = "SELECT * FROM `user` WHERE `ServiceType` =1 ";
}
if($service == "Alternate")
{
    $query = "SELECT * FROM `user` WHERE `ServiceType` =2 ";
}
if($service == "Weekly")
{
    $query = "SELECT * FROM `user` WHERE `ServiceType` =3 ";
}
foreach($conn->query($query) as $customer)
{
    $customerName = $customer['UserName'];
    $apartmentID = $customer['ApartmentID'];
    $getApartment = "SELECT * FROM `apartment` WHERE `ApartmentID` = '$apartmentID'";
    foreach($conn->query($getApartment) as $apartment)
    {
        $apartmentName = $apartment['ApartmentName'];
    }

    echo "<tr class=\"cart_item center\"><td class=\"cart-product-name\">".$customerName."</td><td>".$apartmentName."</td>";
}

?>