<?php

require_once __DIR__ . '/constants.php';
require_once __DIR__ . '/classes/Article.php';
require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/../classes/View.php';

$news = new News(NEWS_STORAGE_FILE_PATH);

$view = new View('newsBasic.php', $news->getNews());

$view->display('newsBasic.php');