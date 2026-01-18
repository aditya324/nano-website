<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

/* Manual .env loader */
function loadEnv($path)
{
    if (!file_exists($path)) return;

    foreach (file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (str_starts_with(trim($line), '#')) continue;

        [$key, $value] = explode('=', $line, 2);
        $_ENV[$key] = trim($value, "\"'");
    }
}

loadEnv(__DIR__ . '/.env');

header('Content-Type: application/json');

try {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception('Invalid request method');
    }

    $mail = new PHPMailer(true);

    // SMTP CONFIG
    $mail->isSMTP();
    $mail->Host       = $_ENV['MAIL_HOST'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $_ENV['MAIL_USERNAME'];
    $mail->Password   = $_ENV['MAIL_PASSWORD'];
    $mail->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];
    $mail->Port       = $_ENV['MAIL_PORT'];

    // HEADERS
    $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
    $mail->addAddress($_ENV['MAIL_TO_ADDRESS']);
    $mail->addReplyTo($_POST['email'], $_POST['name']);

    // OPTIONAL FILE
    if (!empty($_FILES['report']['tmp_name'])) {
        $allowed = ['pdf', 'doc', 'docx'];
        $ext = strtolower(pathinfo($_FILES['report']['name'], PATHINFO_EXTENSION));

        if (!in_array($ext, $allowed)) {
            throw new Exception('Invalid file type. Only PDF and DOCX allowed.');
        }

        $mail->addAttachment($_FILES['report']['tmp_name'], $_FILES['report']['name']);
    }

    // CONTENT
    $mail->isHTML(true);
    $mail->Subject = 'New Website Enquiry';
    $mail->Body = "
        <h3>New Enquiry Received</h3>
        <p><strong>Name:</strong> {$_POST['name']}</p>
        <p><strong>Mobile:</strong> {$_POST['mobile']}</p>
        <p><strong>Email:</strong> {$_POST['email']}</p>
        <p><strong>Message:</strong><br>{$_POST['message']}</p>
    ";

    $mail->send();

    echo json_encode([
        'status'  => 'success',
        'message' => 'Your message has been received. We will contact you soon.'
    ]);
} catch (Exception $e) {
    echo json_encode([
        'status'  => 'error',
        'message' => $e->getMessage()
    ]);
}
