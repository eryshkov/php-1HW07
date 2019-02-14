<?php
session_start();

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/constants.php';
require_once __DIR__ . '/../classes/View.php';

if (null !== getCurrentUser()) {
    header('Location: ' . URL_ROOT);
    exit();
}

$userName = '';
$userPassword = '';

if (isset($_POST['login'])) {
    $userName = $_POST['login'];
}
if (isset($_POST['password'])) {
    $userPassword = $_POST['password'];
}

if (checkPassword($userName, $userPassword)) {
    $_SESSION['user'] = $userName;
    header('Location: ' . URL_ROOT);
    exit();
}

$view = new View('galleryLogin.php', URL_ROOT);
$view->display('galleryLogin.php');
