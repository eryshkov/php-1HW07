<?php
session_start();

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/classes/Uploader.php';
require_once __DIR__ . '/classes/View.php';

if (null === getCurrentUser()) {
    header('Location: /login.php');
    exit();
}

$userName = getCurrentUser();

$imageUploader = new Uploader('image');
$uploadResult = $imageUploader->upload();

if (true === $uploadResult) {
    writeLog(__DIR__ . '/img/log.txt', $userName, 'image');

    header('Location:' . '/gallery.php');
    exit;
} else {
    $view = new View();
    $view->assign('info', 'Не удалось сохранить этот файл на сервере');
    $view->display(__DIR__ . '/templates/info.php');
}