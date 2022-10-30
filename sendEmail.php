<?php

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    $message = $_POST['message'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //SMTP Settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "shindeshubham2028@gmail.com";
    $mail->Password = "grnesqfifhesfamx";
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    $mail->isHTML(true);
    $mail->setFrom($email);
    $mail->addAddress("shindeshubham2028@gmail.com");
    $mail->Subject = ("From: " . "$email");
    $mail->Body = "<center><h1>Hareshwar Foods & Agro Services</h1><h2>New Connection</h2><br></center>" .  "<h4>$message</h4>"  . "<br>" . "<h3>From: $email</h3>" . "<br>" . "Name: $name" . "<br>" . "Phone Number: $contactno" . "<br>" . "<center><p>Thank You</p></center>";

    if ($mail->send()) {
        $status = "success";
        $response = "Email is send!";
    } else {
        $status = "failed";
        $response = "Something is Wrong: <br> " .  $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}
