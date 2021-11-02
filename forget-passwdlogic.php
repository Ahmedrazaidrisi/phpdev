<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


session_start();
require 'vendor/autoload.php';
/*
if (strlen($_SESSION['login']) == 0) {
              header('location:login.php');
} else {*/

require 'vendor/phpmailer/src/Exception.php';
require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/SMTP.php';


if (isset($_SESSION['login'])) {
              $email = $_POST['reset'];

              $mail = new PHPMailer(true);
              try {


                            $mail->Host       = "smtp.gmail.com";
                            $mail->SMTPAuth   = true;
                            $mail->isSMTP();
                            $mail->Mailer = "smtp";
                            $mail->SMTPDebug = 1;

                            $mail->SMTPSecure = 'tls';
                            $mail->Port       = 587;


                            // recepient for mail 



                            $mail->Username   = "ghosttemp99@gmail.com";
                            $mail->Password   = "winchester@@@@";

                            // its not necrssarey   $mail->setFrom("ahmedrazaidrisi660@gmail.com", "adminiustrator");
                            $mail->AddAddress("$email", "awrfsegsgsgg ");

                            $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";



                            ///$mail->addAttachment('url', 'filename');

                            $mail->isHTML(true);
                            $mail->Subject = 'testing bro';
                            $mail->Body    = 'HTML message body in <b>hage</b>!';
                            $mail->AltBody = 'Body in plain text for non-HTML mail clients';
                            $mail->send();
                            $mail->MsgHTML($content);


                            echo "message has been sent";
              } catch (Exception $e) {
                            echo  "echo message had not sent";
              }
}
