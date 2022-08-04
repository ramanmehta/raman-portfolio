<?php  

$to      = 'nobody1@yopmail.com';
$subject = 'test';
$message = 'test';
$headers = 'From: webmaster@skbstores.com' . "\r\n" .
            'Reply-To: webmaster@skbstores.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
$sendmail = mail($to, $subject, $message, $headers);

if( $sendmail == true ) {
    echo "Message sent successfully...";
 }else {
    echo "Message could not be sent...";
 }

?>