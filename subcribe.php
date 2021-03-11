<?php
$name="New User";
$recipient=$_POST['mail'];
$subject= "New Subscriber";
$email="sanket@webcubictechnologies.com";
$body="Welcome to childcare";

require_once 'sendmail.php';
?>
