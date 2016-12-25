<?php

require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';

$news = new News(__DIR__ . '/data/itNews.php');

$view = new View();

if (isset($_GET['id'])) {
    $id  = (int)$_GET['id'] -1;
} else {
    $id = null;
}

$view->set('articleOne', $news->getOneArticle($id));
$view->display(__DIR__ . '/template/article.php');