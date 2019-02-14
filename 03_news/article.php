<?php

require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/../classes/View.php';

$news = new News(__DIR__ . '/news.txt');

$articleNumber = $_GET['id'];
$newsArticles = $news->getNews();

if (isset($newsArticles[$articleNumber])) {
    $article = $newsArticles[$articleNumber];

    $view = new View();
    $view->assign('article', $article);

    $view->display(__DIR__ . '/templates/newsArticle.php');
}

