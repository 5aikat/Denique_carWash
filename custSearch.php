<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 3/1/2016
 * Time: 9:58 AM
 */
require "config.php";
$cusotmer = $_POST['customer'];

$search = "SELECT * FROM `user` WHERE `emailID` = '$cusotmer' OR `userPhone` = '$cusotmer' OR `UserName`='$cusotmer'";

foreach($conn->query($search) as $cust)
{
    $apartmentID = $cust['ApartmentID'];
    $cleanerID = $cust['CleanerID'];
    $apartmentQuery = "SELECT `ApartmentName`,`Address` FROM `apartment` WHERE `ApartmentID` = '$apartmentID'";
    foreach($conn->query($apartmentQuery) as $apart)
    {
        $ApartmentName = $apart['ApartmentName'];
        $Address = $apart['Address'];
    }
    if($cust['ServiceType'] == '1')
    {
        $service = "Daily";
    }
    if($cust['ServiceType'] == '2')
    {
        $service = "Alternate";
    }
    if($cust['ServiceType'] == '3')
    {
        $service = "Weekly";
    }

    $cleanerQuery = "SELECT * FROM `cleaner` WHERE `CleanerID` ='$cleanerID'";
    foreach($conn->query($cleanerQuery) as $clean)
    {
        $cleaner = $clean['CleanerName'];
    }
    if($cust['isActive'] == TRUE)
    {
        $status = "ACTIVE";
    }
    else
    {
        $status = "INACTIVE";
    }
    $name = $cust['UserName'];
    $id = $cust['UserID'];
    $phone = $cust['userPhone'];
    $email = $cust['emailID'];

    echo 'Customer Name : '.$name.'<br/>
          Customer Email :'.$email.'<br/>
          Customer Phone : '.$phone.'<br/>
          Date of Birth : '.$cust['DOB'].'<br/>
          Date of Anniversary : '.$cust['DOA'].'<br/>
          Car Make : '.$cust['CarMake'].'<br/>
          Car Model : '.$cust['CarModel'].'<br/>
          Car Type : '.$cust['CarType'].'<br/>
          Car Color : '.$cust['CarColor'].'<br/>
          Registration Number : '.$cust['RegistrationNo'].'<br/>
          Apartment Name : '.$ApartmentName.'<br/>
          Address : '.$Address.'<br/>
          Assigned Cleaner : '.$cleaner.'<br/>
          Ready By Time : '.$cust['ReadyByTime'].'<br/>
          Service : '.$service.'<br/>
          Service Status : '.$status.'<br/>    ';

    if($cust['isActive'] == True)
    {
        echo "<a href='changeCustomer.php?i=1&id=".$id."' class=\"button button-3d notopmargin fright\"style=\"background: linear-gradient(to right, #095764 , #159c7c);font-weight:bold; color:yellow\" >Delete Customer </a></div>
        ";
    }
    if($cust['isActive'] == False)
    {
        echo "<a href='changeCustomer.php?i=2&id=".$id."' class=\"button button-3d notopmargin fright\"style=\"background: linear-gradient(to right, #095764 , #159c7c);font-weight:bold; color:yellow\" >Re-Accept Customer </a></div>
        ";
    }


}

?>