<?php

require_once __DIR__ . '/classes/Article.php';
require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/../classes/View.php';

$news = new News(__DIR__ . '/news.txt');

$articleNumber = $_GET['id'];
$newsArticles = $news->getNews();

if (isset($newsArticles[$articleNumber])) {
    $article = $newsArticles[$articleNumber];

    $view = new View('newsArticle.php', $article);

    $view->display('newsArticle.php');
}

