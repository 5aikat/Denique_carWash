<?php
require "config.php";

$cleanerName = $_POST['cleanerName'];
$cleanerPhone =  $_POST['cleanerPhone'];
$apartment = $_POST['ApartmentName'] ;


$addquery = "INSERT INTO `cleaner`(`CleanerName`, `CleanerPhone`) VALUES ('$cleanerName','$cleanerPhone')";

if ($conn->query($addquery) === TRUE) 
{	
	$cleanerID = mysqli_insert_id ($conn);
		foreach($apartment as $app)
		{
			
			foreach($conn->query("SELECT * FROM apartment WHERE `ApartmentID` = '$app'") as $appSelect)
			{
			$appname = $appSelect['ApartmentName'];
			}
			$add = "INSERT INTO `cleanerapartment`(`CleanerID`, `ApartmentID`, `CleanerName`, `CleanerPhone`, `ApartmentName`) VALUES ('$cleanerID','$app','$cleanerName','$cleanerPhone','$appname')";
			if ($conn->query($add) === TRUE) 
			{
				echo "Apartment Linked!!";
			}else
			{
				echo "Apartment Linked failed <br/>".$conn->error;
			}
		}
    echo "Cleaner Successfully Added!!";
} else 
{
    echo "Error: " . $addquery . "<br>" . $conn->error;
}

?>