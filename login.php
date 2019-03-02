<?php
session_start();

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/classes/View.php';

if (null !== getCurrentUser()) {
    header('Location: /gallery.php');
    exit();
}

if (isset($_POST['login'], $_POST['password'])) {
    $userName = $_POST['login'];
    $userPassword = $_POST['password'];
}

$view = new View();

if (isset($userName, $userPassword)) {
    if (checkPassword($userName, $userPassword)) {
        $_SESSION['user'] = $userName;
        header('Location: /gallery.php');
        exit();
    } else {
        $view->assign('info', 'Имя пользователя и пароль не верные');
    }
}

$view->display(__DIR__ . '/templates/galleryLogin.php');
