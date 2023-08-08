<?php

$config = require_once __DIR__ . '/../config/app.php';
$recipient_email = $coing['mail']['to_email'];

$contact_name = $inputs['name'];
$contact_email = $inputs['email'];
$message = $inputs['message'];
$subject = $inputs['subject'];

$headers[] = 'MIME-Version 1.0';
$headers[] = 'Content-type: text/html; charset= utf-8';
$headers[] =  "To: $recipient_email";
$headers[] =  "From: $contact_email";
$header = implode('\r\n', $headers);

mail($recipient_email, $subject, $message, $header);
