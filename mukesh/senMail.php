<?php include("autoload.php");
$mail = new PHPMailer();
die("asdas");
//Enable SMTP debugging.
$mail->SMTPDebug = 3;                           
//Set PHPMailer to use SMTP.
$mail->isSMTP();        
//Set SMTP host name                      
$mail->Host = "smtp.elasticemail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                      
//Provide username and password
$mail->Username = "smtekki1@gmail.com";             
$mail->Password = "F2DAAECA4F18804D045191564FE3725E8C78";                       
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                       
//Set TCP port to connect to
$mail->Port = 2525;                    
$mail->From = "smtekki1@gmail.com";
$mail->FromName = "RK Mehta";
$mail->addAddress("smtekki1@gmail.com", "Mukesh");
$mail->isHTML(true);
$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";
var_dump(!$mail->send());
die;
if(!$mail->send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "Message has been sent successfully";
}

?>
