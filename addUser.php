<?php

require "config.php";

$userName = $_POST['userName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$carMake = $_POST['carmake'];
$carModel = $_POST['carmodel'];
$registrationNo = $_POST['registrationNo'];
$cartype = $_POST['cartype'];
$carcolor = $_POST['carcolor'];
$readyBy = $_POST['readyBy'];
$lastFour = $_POST['lastFour'];
$serviceType = $_POST['serviceType'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$apartmentID = $_POST['ApartmentName'];
$cleanerID = $_POST['CleanerName'];
$interiorWashDate = $_POST['interiorWashDate'];
$parking = $_POST['parking'];


$flatNo =$_POST['flatNo'];
$interiorCost = $_POST['interiorCost'];
$exteriorCost = $_POST['exteriorCost'];

$dob = $_POST['dob'];
$doa = $_POST['anniversary'];

$strStarDate = strtotime($startDate);
$strEndDate = strtotime($endDate);
$datediff = $strEndDate - $strStarDate;
$startDateIn = $startDate;
$numberOfBookings = 0;
$cleanerName;
$getCleanerQuery = "SELECT * FROM `cleaner` WHERE `CleanerID`='$cleanerID'";
foreach($conn->query($getCleanerQuery) as $cleaner)
{
    $cleanerPhone = $cleaner['CleanerPhone'];
    $cleanerName = $cleaner['CleanerName'];
}



$datediff = floor($datediff/(60*60*24));
//add User

$addUserQuery = "INSERT INTO `user`(`UserName`, `emailID`,`DOB`,`DOA`, `userPhone`, `CarMake`, `CarModel`, `RegistrationNo`, `CarType`, `CarColor`, `ReadyByTime`, `LastFourDigit`, `ServiceType`, `ApartmentID`, `CleanerID`, `StartDate`, `EndDate`,`flatNo`, `interiorCost`, `exteriorCost`,`Parking`)
                VALUES ('$userName','$email','$dob','$doa','$phone','$carMake','$carModel','$registrationNo','$cartype','$carcolor','$readyBy','$lastFour','$serviceType','$apartmentID','$cleanerID','$startDate','$endDate','$flatNo','$interiorCost','$exteriorCost','$parking')";



if($conn->query($addUserQuery) === TRUE)
{
    $userID =  mysqli_insert_id($conn);
    //addParking

   /** $updateParking = "UPDATE `parking` SET `userID`='$userID' WHERE `ParkingID` = '$parkingID'";
    If($conn->query($updateParking) === TRUE)
    {
        echo "Parking Added!";

    }
    $getParking = "SELECT * FROM `parking` WHERE `ParkingID` = '$parkingID'";
    foreach($conn->query($getParking) as $parking)
    {
        $parkingName = $parking['ParkingName'];
        $parkingAddress = $parking['ParkingAddress'];
    }
    **/

    if($serviceType == "1")
    {

        //add eventMeta
        $numberOfBookings = $datediff;
        $insertEventMeta = "INSERT INTO `eventmeta`(`EventID`, `StartDate`,`Time`, `TotalDuration`)
                                            VALUES ('1','$startDate','$readyBy','$numberOfBookings')";
        if ($conn->query($insertEventMeta) === TRUE)
        {
            $eventMetaID = mysqli_insert_id($conn);
            for ($i = 1; $i <= $numberOfBookings; $i++) {
                //add Bookings
				$sd = strtotime($startDate);
				$month=date("F",$sd);
				$year=date("Y",$sd);
                $addBooking = "INSERT INTO `booking`(`EventMetaID`, `UserID`, `CleanerID`, `UserName`, `CleanerName`,`cleanerPhone`, `ServiceType`, `Day`, `Time`,`ApartmentID`,`Month`,`Year`, `userPhone`, `carMake`, `carModel`,`carColor`,`Parking`, `registrationNo`)
                                        VALUES ('$eventMetaID','$userID','$cleanerID','$userName','$cleanerName','$cleanerPhone','Daily - Exterior','$startDate','$readyBy','$apartmentID','$month','$year','$phone','$carMake','$carModel','$carcolor','$parking','$registrationNo')";
                if ($conn->query($addBooking) === TRUE)
                {
                    echo "Exterior Wash Booking Scheduled!";
                }
                $strStart = new DateTime($startDate);
                $newStartDate= $strStart->modify('+1 day');
                $startDate = $newStartDate->format('d-m-Y') ;
            }
        }
        $insertEventMetaIn = "INSERT INTO `eventmeta`(`EventID`, `StartDate`,`Time`, `TotalDuration`)
                                            VALUES ('4','$interiorWashDate','$readyBy','$numberOfBookings/7')";
        if($conn->query($insertEventMetaIn) === TRUE)
        {
            $eventMetaID = mysqli_insert_id($conn);
            for ($i = 1; $i <= floor($numberOfBookings/7); $i++) {
                //add Bookings
				$sd = strtotime($interiorWashDate);
				$month=date("F",$sd);
				$year=date("Y",$sd);
                $addBooking = "INSERT INTO `booking`(`EventMetaID`, `UserID`, `CleanerID`, `UserName`, `CleanerName`,`cleanerPhone`, `ServiceType`, `Day`, `Time`,`ApartmentID`,`Month`,`Year`, `userPhone`, `carMake`, `carModel`,`carColor`,`Parking`, `registrationNo`)
                                        VALUES ('$eventMetaID','$userID','$cleanerID','$userName','$cleanerName','$cleanerPhone','Daily - Interior','$interiorWashDate','$readyBy','$apartmentID','$month','$year','$phone','$carMake','$carModel','$carcolor','$parking', '$registrationNo')";
                if ($conn->query($addBooking) === TRUE)
                {
                    echo "Interior Wash Booking Scheduled!";
                }
                $strStart = new DateTime($interiorWashDate);
                $newStartDate= $strStart->modify('+7 day');
                $interiorWashDate = $newStartDate->format('d-m-Y') ;
            }
        }

    }
    if($serviceType == "2")
    {
        //add eventMeta
        $numberOfBookings = $datediff;
        $insertEventMeta = "INSERT INTO `eventmeta`(`EventID`, `StartDate`,`Time`, `TotalDuration`)
                                            VALUES ('2','$startDate','$readyBy','$numberOfBookings')";
        if ($conn->query($insertEventMeta) === TRUE)
        {
            $eventMetaID = mysqli_insert_id($conn);
            for ($i = 1; $i <= floor($numberOfBookings/2); $i++) {
                //add Bookings
				$sd = strtotime($startDate);
				$month=date("F",$sd);
				$year=date("Y",$sd);
                $addBooking = "INSERT INTO `booking`(`EventMetaID`, `UserID`, `CleanerID`, `UserName`, `CleanerName`,`cleanerPhone`, `ServiceType`, `Day`, `Time`,`ApartmentID`,`Month`,`Year`,`userPhone`, `carMake`, `carModel`,`carColor`,`Parking`, `registrationNo`)
                                        VALUES ('$eventMetaID','$userID','$cleanerID','$userName','$cleanerName','$cleanerPhone','Alternate - Exterior','$startDate','$readyBy','$apartmentID','$month','$year','$phone','$carMake','$carModel','$carcolor','$parking', '$registrationNo')";
                if ($conn->query($addBooking) === TRUE)
                {
                    echo "Exterior Wash Booking Scheduled!";
                }
                $strStart = new DateTime($startDate);
                $newStartDate= $strStart->modify('+2 day');
                $startDate = $newStartDate->format('d-m-Y') ;
            }
        }
        $insertEventMetaIn = "INSERT INTO `eventmeta`(`EventID`, `StartDate`,`Time`, `TotalDuration`)
                                            VALUES ('5','$interiorWashDate','$readyBy','$numberOfBookings/14')";
        if($conn->query($insertEventMetaIn) === TRUE)
        {
            $eventMetaID = mysqli_insert_id($conn);
            for ($i = 1; $i <= floor($numberOfBookings/14); $i++) {
                //add Bookings
				$sd = strtotime($interiorWashDate);
				$month=date("F",$sd);
				$year=date("Y",$sd);
                $addBooking = "INSERT INTO `booking`(`EventMetaID`, `UserID`, `CleanerID`, `UserName`, `CleanerName`,`cleanerPhone`, `ServiceType`, `Day`, `Time`,`ApartmentID`,`Month`,`Year`, `userPhone`, `carMake`, `carModel`,`carColor`,`Parking`, `registrationNo`)
                                        VALUES ('$eventMetaID','$userID','$cleanerID','$userName','$cleanerName','$cleanerPhone','Alternate - Interior','$interiorWashDate','$readyBy','$apartmentID','$month','$year','$phone','$carMake','$carModel','$carcolor','$parking', '$registrationNo')";
                if ($conn->query($addBooking) === TRUE)
                {
                    echo "Interior Wash Booking Scheduled!";
                }
                $strStart = new DateTime($interiorWashDate);
                $newStartDate= $strStart->modify('+14 day');
                $interiorWashDate = $newStartDate->format('d-m-Y') ;
            }
        }

    }
    if($serviceType == "3")
    {
        //add eventMeta
        $numberOfBookings = $datediff;
        $insertEventMeta = "INSERT INTO `eventmeta`(`EventID`, `StartDate`,`Time`, `TotalDuration`)
                                            VALUES ('3','$startDate','$readyBy','$numberOfBookings')";
        if ($conn->query($insertEventMeta) === TRUE)
        {
            $eventMetaID = mysqli_insert_id($conn);
            for ($i = 1; $i <= floor($numberOfBookings/7); $i++) {
                //add Bookings
				$sd = strtotime($startDate);
				$month=date("F",$sd);
				$year=date("Y",$sd);
                $addBooking = "INSERT INTO `booking`(`EventMetaID`, `UserID`, `CleanerID`, `UserName`, `CleanerName`,`cleanerPhone`, `ServiceType`, `Day`, `Time`,`ApartmentID`,`Month`,`Year`,`userPhone`, `carMake`, `carModel`,`carColor`,`Parking`, `registrationNo`)
                                        VALUES ('$eventMetaID','$userID','$cleanerID','$userName','$cleanerName','$cleanerPhone','Weekly - Exterior','$startDate','$readyBy','$apartmentID','$month','$year','$phone','$carMake','$carModel','$carcolor','$parking', '$registrationNo')";
                if ($conn->query($addBooking) === TRUE)
                {
                    echo "Exterior Wash Booking Scheduled!";
                }
                $strStart = new DateTime($startDate);
                $newStartDate= $strStart->modify('+7 day');
                $startDate = $newStartDate->format('d-m-Y') ;
            }
        }
        $insertEventMetaIn = "INSERT INTO `eventmeta`(`EventID`, `StartDate`,`Time`, `TotalDuration`)
                                            VALUES ('6','$interiorWashDate','$readyBy','$numberOfBookings/28')";
        if($conn->query($insertEventMetaIn) === TRUE)
        {
            $eventMetaID = mysqli_insert_id($conn);
            for ($i = 1; $i <= floor($numberOfBookings/28); $i++) {
                //add Bookings
				$sd = strtotime($interiorWashDate);
				$month=date("F",$sd);
				$year=date("Y",$sd);
                $addBooking = "INSERT INTO `booking`(`EventMetaID`, `UserID`, `CleanerID`, `UserName`, `CleanerName`,`cleanerPhone`, `ServiceType`, `Day`, `Time`,`ApartmentID`,`Month`,`Year`,`userPhone`, `carMake`, `carModel`,`carColor`,`Parking`, `registrationNo`)
                                        VALUES ('$eventMetaID','$userID','$cleanerID','$userName','$cleanerName','$cleanerPhone','Weekly - Interior','$interiorWashDate','$readyBy','$apartmentID','$month','$year','$phone','$carMake','$carModel','$carcolor','$parking', '$registrationNo')";
                if ($conn->query($addBooking) === TRUE)
                {
                    echo "Interior Wash Booking Scheduled!";
                }
                $strStart = new DateTime($interiorWashDate);
                $newStartDate= $strStart->modify('+28 day');
                $interiorWashDate = $newStartDate->format('d-m-Y') ;
            }
        }

    }



}




?>