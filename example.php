<?php
/** 
 * Validate Email Addresses Via SMTP 
 * This queries the SMTP server to see if the email address is accepted. 
 * @copyright http://naitiksakhiya.in - Please keep this comment intact 
 * @author contact@naitiksakhiya.in
 */
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer; // create a new object
$mail->SMTPOptions = array(
'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
));
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true;
$mail->SMTPSecure = true;
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
$mail->Host = gethostbyname("Your host name"); //ex: smtp.gmail.com
$mail->Port = 25; // or 587

$mail->IsHTML(true); // if its html
$mail->msgHtml("<p>Whats up?</p>"); //html content
//----------------- OR --------------------//
$mail->Body = "Hey What's up?"; // if only text body
$mail->Username = "abcdfd@gmail.com"; //any email adress which you have authencitation
$mail->Password = "********"; //password of your email account
$mail->SetFrom("abcdfd@gmail.com","Naitik");
$mail->AddAddress("where you want to send!!");
$mail->Subject = "This is just test"; //subject of email
$mail->send();
?>

