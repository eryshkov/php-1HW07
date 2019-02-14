<?php

require_once __DIR__ . '/constants.php';
require_once __DIR__ . '/classes/Article.php';
require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/../classes/View.php';

$news = new News(NEWS_STORAGE_FILE_PATH);

$articleNumber = $_GET['id'];
$newsArticles = $news->getNews();

if (isset($newsArticles[$articleNumber])) {
    $article = $newsArticles[$articleNumber];

    $view = new View('newsArticle.php', $article);

    $view->display('newsArticle.php');
}

