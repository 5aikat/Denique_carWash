<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 2/24/2016
 * Time: 2:50 PM
 */
require "config.php";
$cleanerID = $_POST['cleanerID'];

$query = "SELECT * FROM `booking` WHERE `CleanerID`= '$cleanerID'";
$result = $conn->query($query);
$numberOfRows = mysqli_num_rows($result);
echo "Total Number of Bookings for the Cleaner for the given period is :".$numberOfRows;

?>