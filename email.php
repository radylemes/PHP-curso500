<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once 'PHPMailer-6.1.4/src/PHPMailer.php';

require_once 'PHPMailer-6.1.4/src/SMTP.php';


$mail = new PHPMailer();
$mail->setLanguage('pt_br', './lib/PHPMailer-6.1.4/language');
$mail->isSMTP();                                           
$mail->Host       = 'smtp.gmail.com'; 
$mail->Port       = 587;
$mail->SMTPSecure = 'tls'; 
$mail->SMTPAuth   = true;
$mail->CharSet    = PHPMailer::CHARSET_UTF8;                                  
$mail->Username   = 'becapizzaiola@gmail.com';                     
$mail->Password   = '123mudar@';
$mail->setFrom('becapizzaiola@gmail.com', 'Mailer');
$mail->addAddress('danylemes@gmail.com', 'Daniel');   
$mail->isHTML(true);                                  
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';   

if(!$mail->send()){
    print("Erro: {$mail->ErrorInfo}");
}else{
    print("Email enviado");
}
 