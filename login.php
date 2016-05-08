<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 3/22/2016
 * Time: 9:31 PM
 */
require "config.php";
$userName = $_POST['userName'];
$password = $_POST['Password'];
$query = "SELECT * FROM `admin`";
foreach($conn->query($query) as $admin)
{

}

?>