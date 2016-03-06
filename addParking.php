<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 2/27/2016
 * Time: 11:10 AM
 */
require "config.php";

$apartmentID = $_POST['apartmentID'];
$pName = $_POST['pName'];
$pAddress = $_POST['pAddress'];
$pNotes = $_POST['pNotes'];

$addParking = "INSERT INTO `parking`(`ApartmentID`,`ParkingAddress`, `ParkingName`, `Notes`) VALUES ('$apartmentID','$pAddress','$pName','$pNotes')";
If($conn->query($addParking) === TRUE )
{

    $allParking = "SELECT * FROM `parking` WHERE `ApartmentID`='$apartmentID'";
    foreach($conn->query($allParking) as $parking)
    {
        echo "<tr  class=\"cart_item center\">
                    <td class=\"cart-product-name\">".$parking['ParkingName']." </td>
                    <td class=\"cart-product-name\">".$parking['ParkingAddress']."</td>
                    <td class=\"cart-product-name\">".$parking['Notes']."</td>
              </tr>";
    }
}

?>