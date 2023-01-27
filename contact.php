
<?php

//import phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//use config file
require 'vendor/autoload.php';

//creates new email thru phpmailer
$mail = new PHPMailer;

// Get data from form 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];



$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtpservice';  // Specify main and backup SMTP servers
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Port = 587;                          //port used 
$mail->Username = 'usernamehere';                 // SMTP username
$mail->Password = 'passwordhere';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'fromemail';           //set from email
$mail->FromName = 'Contact Form';                   //set from name
$mail->addAddress('toemail', 'name');     // Name is optional
$mail->addReplyTo("$email", "$firstname");                      //uses the name and email entered in form to let me know who to email back


$mail->Subject = "$subject";                         //sets the subject of the message using the subject from the form
$mail->Body    = "$message";                         //sets message using message typed in the form


if(!$mail->send()) {
    echo 'Message could not be sent.';           //error message
    echo 'Mailer Error: ' . $mail->ErrorInfo;      //error info
} else {
    echo 'Message has been sent';          //success message
    header("Location:index.html");          //redirect home
}

?>