<?php
$config = require __DIR__ . '/config.php';
$to = $config['recipient_email'] ?? 'info@srlegalservices.co.uk';
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$organisation = trim($_POST['organisation'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');
if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $message === '') {
    header('Location: contact.html?status=error'); exit;
}
$subject = 'Website enquiry - S.R Legal Services';
$body = "Name: $name
Organisation: $organisation
Email: $email
Phone: $phone
Service: $service

Message:
$message";
$headers = "From: website@srlegalservices.co.uk
Reply-To: $email
Content-Type: text/plain; charset=UTF-8
";
@mail($to, $subject, $body, $headers);
header('Location: contact.html?status=sent'); exit;
?>