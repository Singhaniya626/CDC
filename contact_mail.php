<?php 
session_start();
error_reporting(1);
extract($_REQUEST);

include ("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
//$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->SMTPAuth = true;
//$mail->Port = 587;

$mail->Username = "shivam@technoraga.com";
$mail->Password = "technoragaintern123!@#";
$mail->From = "shivam@technoraga.com";
$mail->FromName = "CITY DIAGNOSTIC";
// $mail->addAddress('vetant@technoraga.com');
$mail->addAddress('contactform21@gmail.com');

$mail->IsHTML(true);
$mail->Subject = "CITY DIAGNOSTIC";
$mail->Body = "
<pre style='font-size:21px'>
	Name 	:	$name
	Email 	:	$email
	Msg 	:	$message
</pre>
";

      if (!$mail->send())
      {
        //$error = "Mailer Error: " . $mail->ErrorInfo;
        // echo '<span>'.$error.'</span>';
        header("location:index.php?msg=no");
      }
      else
      {
        header("location:index.php?msg=yes");
        // echo "Send Mail";
      }
    



?>
