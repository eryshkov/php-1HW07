<?php
session_start();

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/../classes/View.php';

if (null !== getCurrentUser()) {
    header('Location: /02_gallery/');
    exit();
}

if (isset($_POST['login'])) {
    $userName = $_POST['login'];
} else {
    $userName = '';
}
if (isset($_POST['password'])) {
    $userPassword = $_POST['password'];
} else {
    $userPassword = '';
}

if (checkPassword($userName, $userPassword)) {
    $_SESSION['user'] = $userName;
    header('Location: /02_gallery/');
    exit();
}

$view = new View();
$view->display(__DIR__ . '/templates/galleryLogin.php');
