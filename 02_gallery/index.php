<?php
session_start();

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/../classes/View.php';

$userName = getCurrentUser();

$pathToImagesFolder = __DIR__ . '/img/';
$urlToImagesFolder = '/02_gallery/img/';

$dirContents = scandir($pathToImagesFolder, SCANDIR_SORT_NONE);

$images = [];

foreach ($dirContents as $item) {
    $fileType = mime_content_type($pathToImagesFolder . $item);
    $isImage = strpos($fileType, 'image') === 0;

    if ($isImage) {
        $images[] = $item;
    }

}


$view = new View();
$view->assign('userName', $userName);
$view->assign('images', $images);
$view->assign('pathToImagesFolder', $pathToImagesFolder);
$view->assign('urlToImagesFolder', $urlToImagesFolder);

$view->display(__DIR__. '/templates/galleryBasic.php');



