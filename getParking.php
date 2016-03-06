<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 2/27/2016
 * Time: 11:28 AM
 */
require "config.php";
$apartmentID = $_POST['apartment'];
$getParking = "SELECT * FROM `parking` WHERE `ApartmentID` = '$apartmentID'";
foreach($conn->query($getParking) as $parking)
{
    echo "<option value='".$parking['ParkingID']."' >".$parking['ParkingName'].",Address : ".$parking['ParkingAddress']."</option>";
}

?>