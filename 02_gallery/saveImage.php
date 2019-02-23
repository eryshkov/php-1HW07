<?php
session_start();

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/classes/Uploader.php';

if (null === getCurrentUser()) {
    header('Location: /02_gallery/login.php');
    exit();
}

$userName = getCurrentUser();

$imageUploader = new Uploader('image');
$uploadResult = $imageUploader->upload();

if (true === $uploadResult) {
    writeLog(__DIR__ . '/img/log.txt', $userName, 'image');

    header('Location:' . '/02_gallery/');
    exit;
} else {
    ?>Не удалось сохранить этот файл на сервере<?php
}