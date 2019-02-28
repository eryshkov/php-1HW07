<?php
session_start();

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/classes/View.php';

$userName = getCurrentUser();

$images = getImagesAtDir(__DIR__ . '/img/');

$view = new View();
$view->assign('userName', $userName);
$view->assign('images', $images);
$view->display(__DIR__ . '/templates/galleryBasic.php');



