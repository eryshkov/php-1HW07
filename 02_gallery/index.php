<?php
session_start();

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/constants.php';
require_once __DIR__ . '/../classes/View.php';

$userName = getCurrentUser();

$pathToImagesFolder = IMAGE_FOLDER_PATH;
$urlToImagesFolder = URL_TO_IMAGE_FOLDER;

$dirContents = scandir($pathToImagesFolder, SCANDIR_SORT_NONE);

$images = [];

foreach ($dirContents as $item) {
    $fileType = mime_content_type($pathToImagesFolder . $item);
    $isImage = strpos($fileType, 'image') === 0;

    if ($isImage) {
        $images[] = $item;
    }

}

$data['userName'] = $userName;
$data['images'] = $images;
$data['pathToImagesFolder'] = $pathToImagesFolder;
$data['urlToImagesFolder'] = $urlToImagesFolder;

$view = new View('galleryBasic.php', $data);
$view->display('galleryBasic.php');



