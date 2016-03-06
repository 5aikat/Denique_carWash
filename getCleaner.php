<?php
require "config.php";

if(isset($_POST['ApartmentName']))
   {
	 $apartmentID = $_POST['ApartmentName'];
	 $getCleaner = "SELECT * FROM `cleanerapartment` WHERE `ApartmentID`='$apartmentID' AND `isActive`=true" ;
	 foreach($conn->query($getCleaner) as $cleanerList)
	 {
		 echo "<option value='".$cleanerList['CleanerID']."' >".$cleanerList['CleanerName']."</option>";
		 echo $_POST['ApartmentName'];
	 }
   }
   
?>