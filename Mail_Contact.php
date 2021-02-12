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

// $mail->Username = "nbtqueries@gmail.com";
// $mail->Password = "Computers12!@";
// $mail->From = "nbtqueries@gmail.com";
// $mail->FromName = "Nebun Holidays";
// $mail->addAddress($email);

$mail->Username = "contactform21@gmail.com";
$mail->Password = "Singhaniya@!123";
$mail->From = "contactform21@gmail.com";
$mail->FromName = "CITY DIAGNOSTIC";

$mail->addAddress('contactform21@gmail.com');
// $mail->addAddress('nbtqueries@gmail.com');
$mail->IsHTML(true);
$mail->Subject = "Nebun Holiday Contact Page Query";
$mail->Body = "
<pre style='font-size:21px'>
	Name 	:	$name
	Email 	:	$email
	Mobile 	:	$mobile
	Sub 	:	$subject
	Msg 	:	$msg
</pre>
";

      if (!$mail->send())
      {
        //$error = "Mailer Error: " . $mail->ErrorInfo;
        // echo '<span>'.$error.'</span>';
        header("location:contact.php?msg=no");
      }
      else
      {
        header("location:contact.php?msg=yes");
        // echo "Send Mail";
      }
    



?>
