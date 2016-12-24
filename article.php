<?php

require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    $id = null;
}

$news_one = new News(__DIR__ . '/data/it_news.php');
//var_dump($news_one);
$view_one = new View();
$view_one->set('article_one', $news_one->getOneArticles($id));
$view_one->display(__DIR__ . '/template/article.php');
