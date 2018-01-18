<?php

require_once 'mailer/PHPMailer.php';


$mail = new PHPMailer\PHPMailer\PHPMailer();
//$mail->IsSMTP();
//$mail->SMTPAuth = true;
//$mail->SMTPDebug = 0;
//$mail->SMTPSecure = "ssl";
//$mail->Host = "smtp.gmail.com";
//$mail->Port = 465;
//$mail->SMTPOptions = array(
//    'ssl' => array(
//        'verify_peer' => false,
//        'verify_peer_name' => false,
//        'allow_self_signed' => true
//    )
//);
$mail->CharSet = 'utf-8';
$mail->Username = "";
$mail->Password = "";
$mail->SetFrom('thanhpv958@gmail.com', 'thanhpv958');
$mail->addAddress('thanhpv62@wru.vn','thanhpv');
$mail->Subject ='PHP Mailer';
$mail->Body = 'Test php maileraaaaaaaaaaaaaaaaaaaaaaaaaaaa';
if($mail->send() == false)
{
    echo 'Error' . $mail->ErrorInfo;
}
else
{
    echo 'success';
}