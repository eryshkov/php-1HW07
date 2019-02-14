<?php

require_once __DIR__ . '/classes/Article.php';
require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/../classes/View.php';

$news = new News(__DIR__ . '/news.txt');

$view = new View('newsBasic.php', $news->getNews());

$view->display('newsBasic.php');