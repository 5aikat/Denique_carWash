<?php
/**
 * Created by PhpStorm.
 * User: Shaky
 * Date: 4/23/2016
 * Time: 11:50 AM
 */

require "config.php";
# Include the Autoloader (see "Libraries" for install instructions)
require 'mailgun-php/vendor/autoload.php';
use Mailgun\Mailgun;
$month = $_POST['month'];
$year = $_POST['year'];
$service = $_POST['service'];
if($service == "Daily")
{
    $query = "SELECT * FROM `user` WHERE `ServiceType` =1";
}
if($service == "Alternate")
{
    $query = "SELECT * FROM `user` WHERE `ServiceType` =2 ";
}
if($service == "Weekly")
{
    $query = "SELECT * FROM `user` WHERE `ServiceType` =3 ";
}

foreach($conn->query($query) as $customer) {
    $schedule = "\n";
    $customerID = $customer['UserID'];
    $name = $customer['UserName'];
    $email = $customer['emailID'];
    $booking = "SELECT * FROM `booking` WHERE `UserID` = '$customerID' AND `Month` = '$month' AND `Year` = '$year'";
    foreach ($conn->query($booking) as $book) {
        $date = $book['Day'];
        $time = $book['Time'];
        $car = $book['carMake'] . " " . $book['carModel'];
        $cleanerName = $book['CleanerName'];
        $cleanerPhone = $book['cleanerPhone'];
        $schedule = $schedule . "\n" . "Date :" . $date . "  Time :" . $time;

    }
    $bookqueryExt = "SELECT * FROM `booking` WHERE `UserID` = '$customerID' AND `SendMessage` = TRUE  AND (`ServiceType`=\"Daily - Exterior\" OR `ServiceType`=\"Alternate - Exterior\" OR `ServiceType`=\"Weekly - Exterior\") AND `Month` = '$month' AND  `Year` = '$year'";
    $res1 = $conn->query($bookqueryExt);
    $num_Ext_Booking = mysqli_num_rows($res1);
    $bookqueryInt = "SELECT * FROM `booking` WHERE `UserID` = '$customerID' AND `SendMessage` = TRUE  AND (`ServiceType`=\"Daily - Interior\" OR `ServiceType`=\"Alternate - Interior\" OR `ServiceType`=\"Weekly - Interior\") AND `Month` = '$month' AND  `Year` = '$year'";
    $res1 = $conn->query($bookqueryExt);
    $num_Int_Booking = mysqli_num_rows($conn->query($bookqueryInt));
    if ($num_Ext_Booking > 0 && $num_Int_Booking > 0) {

        # Instantiate the client.
        $mgClient = new Mailgun('key-29c0800cd3318fb806f3d7445f5273c3');
        $domain = "sandboxd5ae0d7ddb8848ac923464b48e2127d2.mailgun.org";

        # Make the call to the client.
        $result = $mgClient->sendMessage("$domain",
            array('from' => 'Denique AutoCare <postmaster@sandboxd5ae0d7ddb8848ac923464b48e2127d2.mailgun.org>',
                'to' => '' . $name . '<' . $email . '>',
                'subject' => '' . $name . ' : Your car wash Schedule for ' . $month . '-' . $year . '',
                'text' => 'Your car wash schedule Details for the month of ' . $month . ' , ' . $year . ' is as follows :
                Car : ' . $car . '
                Cleaner Name : ' . $cleanerName . '
                Cleaner Phone : ' . $cleanerPhone . '
' . $schedule . '

										Regards
										Denique AutoCare'));


    }
}
echo "Emails send successfully . Redirecting .....";
header('Location:'.'home.html');
?>