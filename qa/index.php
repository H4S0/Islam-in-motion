<?php


session_start();

$errors = [];
$inputs = [];

$request_method = strtoupper($_SERVER['REQUEST_METHOD']);

if($request_method === 'GET'){
    if(isset($_SESSION['message'])) {
        $message = $_SESSION['message'];
        unset($_SESSION['message']);
    } elseif (isset($_SESSION['inputs']) && isset($_SESSION['errors'])) {
        $errors = $_SESSION['errors'];
        unset($_SESSION['errors']);
        $inputs = $_SESSION['inputs'];
        unset($_SESSION['inputs']);
    }
    require_once __DIR__ . '/inc/get.php';
}elseif($request_method === 'POST'){
    require_once  __DIR__ . '/inc/post.php';

    if(!$errors){
        require_once  __DIR__ . '/inc/mail.php';

        $_SESSION['message'] = 'Hvala na kontaktu';
    }else {
        $_SESSION['errors'] = $errors;
        $_SESSION['inputs'] = $inputs;
    }
    header('Location: index.php', true, 303);
    exit;
}
