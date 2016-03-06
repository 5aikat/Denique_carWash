<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 3/1/2016
 * Time: 10:33 PM
 */
require "config.php";
$UserID = $_GET['id'];

If($_GET['i'] == '1') {
    $query = "UPDATE `user` SET `isActive` = False WHERE `UserID` = '$UserID'";
}
else{
    $query = "UPDATE `user` SET `isActive` = True WHERE `UserID` = '$UserID'";
}
if($conn->query($query) === TRUE)
{
    echo "Success";
}

header('Location:'.'viewCustomer.php');
?>