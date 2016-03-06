<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 2/24/2016
 * Time: 6:10 PM
 */
require "config.php";
$bookingID = $_GET['id'];
if($_GET['i'] == '1')
{
    $updateQuery = "UPDATE `booking` SET `sendMessage`=0 WHERE `BookingID`='$bookingID'";
    if($conn->query($updateQuery) === TRUE)
    {
        echo "Success";
    }
}
if($_GET['i'] == '2')
{
    $updateQuery = "UPDATE `booking` SET `sendMessage`=1 WHERE `BookingID`='$bookingID'";
    if($conn->query($updateQuery) === TRUE)
    {
        echo "Success";
    }
}

header('Location:'.'viewBookings.php');
?>