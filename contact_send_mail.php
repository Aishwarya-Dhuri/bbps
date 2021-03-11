<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// print_r($_POST);exit;
//
// if($_POST['name']) {
//     $keys=array("name",'email',"message");
//     foreach($keys as $key){
//         if(!$_POST[$key]){
//             header('location:contactus.php');
//         }
//     }
// }


// else {
//     echo "not submit";exit;
// }
$name=$_POST['name'];
$email=$_POST['email'];
$diserdloc=$_POST['desiredloc'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$subject= "Childcare Query";
$recipient="sanket@webcubictechnologies.com";//"andrea@bbps.ca";
$body="<table>
            <tr><td>$message<br><br><</td>
            </tr><td>From:$name($diserdloc)<td>
            <tr><td>Contact:$phone</td></tr>
    </table>";
require_once 'sendmail.php';
?>
