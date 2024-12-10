<?php
$name = $_POST['name'];
//$Number = $_POST['Number_of_person'];
//$from = $_POST['from'];
//$until = $_POST['until'];
$email = $_POST['email'];
$contact = $_POST['phone'];
$Subjects = $_POST['subject'];
$Message = $_POST['message'];
//$title = $_POST['title'];
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ganitemailer@gmail.com';                 // SMTP username
$mail->Password = 'Others4m3';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'ganitemailer@gmail.com';
$mail->FromName = 'ganitemailer';
$mail->addAddress('mohit.kumar@ganitsoft.com', 'Joe User');     // Add a recipient
$mail->addAddress('mohit.kumar@ganitsoft.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "dfhkjfhkjhdf";
// $mail->Body    ='Name:'.$name.
                // 'Number:'.$Number. 
				// ' from:'.$from ;
				$mail->Body='<table>
				<tr>
				<td>Name : </td>
				<td>'.$name.'</td>
				</tr>
				
				<tr>
				<td>email : </td>
				<td>'.$email.'</td>
				</tr>
				
				<tr>
				<td>Mobile : </td>
				<td>'.$contact.'</td>
				</tr>
				
				<tr>
				<td>subject : </td>
				<td>'.$Subjects.'</td>
				</tr>
				<tr>
				<td>Message : </td>
				<td>'.$Message.'</td>
				</tr>
				</table>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   header('Location: index.html');
	
}