<?php
require_once('class.phpmailer.php');
$email=$_GET['email'];
$token=$_GET['token'];

//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch

$mail->IsSMTP(); // telling the class to use SMTP

try {
  $mail->Host       = "mail.yourdomain.com"; // SMTP server
  $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->isHTML(true);
  $mail->Username   = "yasmine.bahri@esprit.tn";  // GMAIL username
  $mail->Password   = "211JFT5448";            // GMAIL password
  $mail->AddReplyTo('yasmine.bahri@esprit.tn', 'Yasmine');
  $mail->AddAddress($email);
  $mail->SetFrom('yasmine.bahri@esprit.tn', 'Yasmine');
  $mail->Subject = 'Forgot password';
  echo $token;
  $mail->Body = 'Your new password: '.$token; // optional - MsgHTML will create an alternate automatically
  $mail->AltBody ="";
  
  $mail->Send();
    echo "Message Sent OK</p>\n";
   
    echo "<script type='text/javascript'>";
echo "alert('Verifiez-votre boite mail!');
window.location.href='../Login.php';";
echo "</script>";



} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}

?>