<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer-master/src/Exception.php';
require_once 'PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer-master/src/SMTP.php';

// if($_POST['submit']) {
//     $keys=array("name",'email',"message")
//     forech($keys in $key)
//         if(!$_POST[$key])
//     header('location:contactus.php?mess=success');
// }
// // else {
// //     echo "not submit";exit;
// // }
// // print_r($_POST);exit;
// $fullname=$_POST['name'];
// $email=$_POST['email'];
// $diserdloc=$_POST['diserdloc'];
// $phone=$_POST['phone'];
// $message=$_POST['message'];
// // $subject= $_POST['subject'];
// $body="<table>
//             <tr><td>$message<br><br><</td>
//             </tr><td>From:$fullname($diserdloc)<td>
//             <tr><td>Contact:$phone</td></tr>
//     </table>";

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'p3plcpnl0786.prod.phx3.secureserver.net';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'noreply@bbps.ca';                 // SMTP username
    $mail->Password = 'bbps123!@#';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress($recipient, 'Contact Us Query');//('andrea@bbps.ca', 'Contact Us Query');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('sanket@webcubictechnologies.com', 'Test MAIl');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;//"Childcare Query";//"Test Sub";//$subject; //'Here is the subject';
    $mail->Body    = $body;//"Test Body";//$message//'This is the HTML message body <b>in bold!</b>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
