<?php
require "config.php";

$apartmentName = $_POST['apartmentName'];
$address =  $_POST['address'];
$apartmentStartTime = $_POST['startTime'];
$apartmentEndTime = $_POST['endTime'];
$block = $_POST['block'];
$addquery = "INSERT INTO `apartment`(`ApartmentName`, `Address`, `ApartmentStartTime`, `ApartmentEndTime`, `Block`) VALUES ('$apartmentName','$address','$apartmentStartTime','$apartmentEndTime','$block')";

if ($conn->query($addquery) === TRUE) 
{
    echo "Appartment Successfully Added!!";
} else 
{
    echo "Error: " . $addquery . "<br>" . $conn->error;
}

?>