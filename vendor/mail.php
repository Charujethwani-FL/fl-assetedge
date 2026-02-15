<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/autoload.php';

header('Content-Type: application/json');

$status = false;
$responseMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST["email"])) {
        $firstName = htmlspecialchars($_POST["firstName"] ?? '');
        $lastName  = htmlspecialchars($_POST["lastName"] ?? '');
        $name      = trim($firstName . ' ' . $lastName);
        $email     = htmlspecialchars($_POST["email"] ?? '');
        $phone     = htmlspecialchars($_POST["phone"] ?? '');
        $message   = htmlspecialchars($_POST["message"] ?? '');
        $mail = new PHPMailer(true);

        try {

            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'firstlease.it@gmail.com';
            $mail->Password   = 'vrqf mbng oimc sdor';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;
            $mail->setFrom('firstlease.it@gmail.com', 'AssetEdge Website');
            $mail->addAddress('firstlease.it@gmail.com');
            $mail->addReplyTo($email, $name);
            $mail->isHTML(true);
            $mail->Subject = "New Contact Query - $name";

            $mail->Body = "
                <table cellpadding='6' cellspacing='0' border='1'>
                    <tr><td><strong>Full Name</strong></td><td>$name</td></tr>
                    <tr><td><strong>Email</strong></td><td>$email</td></tr>
                    <tr><td><strong>Phone</strong></td><td>$phone</td></tr>
                    <tr><td><strong>Message</strong></td><td>$message</td></tr>
                </table>
            ";
            if ($mail->send()) {
                $status = true;
                $responseMessage = "Form submitted successfully!";
            } else {
                $responseMessage = "Email sending failed.";
            }
        } catch (Exception $e) {
            $responseMessage = "Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $responseMessage = "Email address is required.";
    }
} else {
    $responseMessage = "Invalid request method.";
}
echo json_encode([
    'status' => $status,
    'message' => $responseMessage
]);
exit;
