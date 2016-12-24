<?php

require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';

$news = new News(__DIR__ . '/data/it_news.php');

$view = new View();
$view->set('articles', $news->getAllArticles());
$view->display(__DIR__ . '/template/news.php');