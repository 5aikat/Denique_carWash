<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 2/27/2016
 * Time: 4:15 PM
 */
require "config.php";

$apartmentID = $_GET['id'];

$activateApartment = "UPDATE `apartment` SET `isActive`=TRUE WHERE `ApartmentID` = $apartmentID";
If($conn->query($activateApartment) === TRUE )
{
    echo "Services to the Apartment Restored";
}
header('Location:'.'viewApartment.php');
?>

