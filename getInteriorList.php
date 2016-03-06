<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 2/25/2016
 * Time: 8:10 PM
 */

require "config.php";
$date = $_POST['date'];

$interiorBooking = "Select * FROM booking WHERE `Day` ='$date' AND `sendMessage`=TRUE AND (`ServiceType`=\"Daily - Interior\" OR `ServiceType`=\"Alternate - Interior\" OR `ServiceType`=\"Weekly - Interior\")";

foreach($conn->query($interiorBooking) as $booking)
{
    echo "<option>".$booking['UserName']."</option>";
}

?>