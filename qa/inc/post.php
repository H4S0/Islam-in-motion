<?php

$honeypot = filter_input(INPUT_POST, 'nickname', FILTER_SANITIZE_STRING);
if ($honeypot) {
    header($_SERVER['SERVER_PROTOCOL'] . '405 Method Not Allowed');
    exit;
}

$name = filter_input(INPUT_POST,  'name', FILTER_SANITIZE_STRING);
$inputs['name'] = $name;
if(!$name || trim($name) === ''){
    $errors['name'] = "Molimo unesite ime";
}

$email = filter_input(INPUT_POST, 'email' , FILTER_SANITIZE_EMAIL);
$inputs['email'] = $email;
if($email){
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if(!$email) {
        $errors['email'] = 'Molimo unesite validan email';
    }
} else {
    $errors['email'] = 'Molimo unesite email';
}

$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$inputs['subject'] = $subject;
if(!$subject || trim($subject) === '') {
    $errors['subject'] = 'Molimo unesite subjekt';
}

$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
$inputs['message'] = $message;
if(!$message || trim($message) === ''){
    $errors['message'] = 'Molimo unesite poruku';
}
