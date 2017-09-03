
<?php
session_start();
include("connection.php");
//include_once("class.Getset.php");

$setvar = new getSet();

// $payable = "111";
// $coupon="c11";
// $slot ="2nd";
// $destination="rajapark";
// $title="msd";
//$seats="5";
$email_id=$_POST['email_id'];
//$setvar->setUname($uname);

$pass=$_POST['pass'];

$payable=$_POST["t1"];
$setvar->setPayable($payable);

$coupon=$_POST["t2"];
$setvar->setCoupon($coupon);

$slot =$_POST["t3"];
$setvar->setSlot($slot);


$destination=$_POST["t4"];
$setvar->setDestination($destination);

$seats=$_POST["t5"];
$setvar->setSeats($seats);

$title=$_POST["t6"];
$setvar->setTitle($title);

$date=$_POST["t7"];
$setvar->setDate($date);

$type=$_POST["t8"];
$setvar->setType($type);

// echo $title;
// echo $slot;
// echo $date;
$connect = new connection();
$connect->makeConnection();
$connect->insertBook($setvar);


?>
