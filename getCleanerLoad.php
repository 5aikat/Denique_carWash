<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 2/24/2016
 * Time: 2:50 PM
 */
require "config.php";
$cleanerID = $_POST['cleanerID'];
$start = $_POST['start'];
$end = $_POST['end'];

$query = "SELECT * FROM `booking` WHERE `CleanerID`= '$cleanerID' AND `Day` between '$start' and '$end'";
$result = $conn->query($query);
$numberOfRows = mysqli_num_rows($result);
echo "Total Number of Bookings for the Cleaner for the given period is :".$numberOfRows;

?>