<?php
$email =  $_GET['email'];
$name = $_GET['name'];
$carmodel = $_GET['carmodel'];
$regNo = $_GET['regno'];
$service =$_GET['service'];
$intBook =  $_GET['intBook'];
$extBook = $_GET['extBook'];
$intCost = $_GET['intCost'];
$extCost = $_GET['extCost'];
$total = $_GET['total'];
$month = $_GET['month'];
$year = $_GET['year'];

# Include the Autoloader (see "Libraries" for install instructions)
require 'mailgun-php/vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('key-29c0800cd3318fb806f3d7445f5273c3');
$domain = "sandboxd5ae0d7ddb8848ac923464b48e2127d2.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
                  array('from'    => 'Denique AutoCare <postmaster@sandboxd5ae0d7ddb8848ac923464b48e2127d2.mailgun.org>',
                        'to'      => ''.$name.'<' .$email. '>',
                        'subject' => '' .$name.' : Your invoice for '.$month.' - '.$year.'' ,
                        'text'    => 'Your invoice Details for the month of '.$month.' , '.$year.' is as follows :

Car : '.$carmodel.'
Registration No : '.$regNo.'
Service Type : '.$service.'
Total Interior Bookings (Rs '.$intCost.' each) : '.$intBook .'
Total Exterior Bookings (Rs '.$extCost.' each) : '.$extBook .'
Total Bill : Rs '.$total .'
										
Regards
Denique AutoCare
										'));

echo "Emails send successfully . Redirecting .....";
header('Location:'.'home.html');
?>