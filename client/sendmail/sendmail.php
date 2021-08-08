<?php
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

//These must be at the top of your script, not inside a function
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$file = $_FILES['images'];
extract($_POST);

if ($file['size'] > 0) {
    move_uploaded_file($file['tmp_name'], "images" . $file['name']);
}

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    //Set UTF-8
    $mail->CharSet = "UTF-8";
    $mail->Username   = 'hungtm199@gmail.com';                     //SMTP username
    $mail->Password   = 'yukqcgfzrvyvsfyr';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('hungtm199@gmail.com', 'Thông tin liên hệ');
    $mail->addAddress('hungtm199@gmail.com', 'Mạnh Hùng');     //Add a recipient
    $mail->addAddress($email, $fullname);               //Name is optional
    // $mail->addReplyTo('bqngoc@gmail.com', 'Thông tin xác nhận');
    // $mail->addCC('thaimy71016@gmail.com');
    // // $mail->addBCC('bcc@example.com');

    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    if ($file['size'] > 0) {
        $mail->addAttachment('./images' . $file['name'], $file['name']);    //Optional name
    }

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $title;
    $mail->Body    = "Xin chào <b>$fullname</b><br>" . $content;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Gửi mail thành công';
} catch (Exception $e) {
    echo "Gửi mail không thành công. <br>Lỗi gửi mail: {$mail->ErrorInfo}";
}
