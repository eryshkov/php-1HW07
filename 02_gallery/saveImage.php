<?php
session_start();

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/classes/Uploader.php';
require_once __DIR__ . '/constants.php';

if (null === getCurrentUser()) {
    header('Location: ' . URL_ROOT . 'login.php');
    exit();
}

$userName = getCurrentUser();

$imageUploader = new Uploader('image');
$uploadResult = $imageUploader->upload();

$isSuccess = $uploadResult['success'];
$isImage = $uploadResult['isImage'];
$imageName = $uploadResult['imageName'];

if (true === $isSuccess) {
    writeLog(IMAGE_FOLDER_PATH . 'log.txt', $userName, $imageName);

    header('Location:' . URL_ROOT);
    exit;
} elseif (false === $isImage) {
    ?>Загружаемый файл не является изображением<?php
} else {
    ?>Не удалось сохранить файл на сервере<?php
}