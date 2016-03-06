<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 2/27/2016
 * Time: 4:15 PM
 */
require "config.php";

$apartmentID = $_GET['id'];

$deleteApartment = "UPDATE `apartment` SET `isActive`= FALSE WHERE `ApartmentID` = $apartmentID";
If($conn->query($deleteApartment) === TRUE )
{
    echo "Services to the Apartment Aborted";
}
header('Location:'.'viewApartment.php');
?>

