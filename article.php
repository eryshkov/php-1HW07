<?php

require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/classes/View.php';

$news = new News(__DIR__ . '/news.txt');

if (isset($_GET['id'])) {
    $article = $news->getArticleBy($_GET['id']);

    if (isset($article)) {
        $view = new View();
        $view->assign('article', $article);
        $view->display(__DIR__ . '/templates/newsArticle.php');
    } else {
        header('Location: ' . '/news.php');
        exit();
    }
}
