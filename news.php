<?php

require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/classes/View.php';

$news = new News(__DIR__ . '/news.txt');

$view = new View();
$view->assign('news', $news);
$view->display(__DIR__ . '/templates/newsBasic.php');