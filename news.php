<?php
//require __DIR__ . '/data/'
require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';

$news = new News(__DIR__ . '/data/it_news.php');

//var_dump($news);

$view = new View();
$view->set('articles', $news->getAllArticles());
//var_dump($news->getAllArticles());
$view->display(__DIR__ . '/template/news.php');