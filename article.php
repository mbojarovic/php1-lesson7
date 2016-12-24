<?php

require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';

$news_one = new News(__DIR__ . '/data/it_news.php');

$view_one = new View();
$view_one->set('article_one', $news_one->getOneArticle());

$view_one->display(__DIR__ . '/template/article.php');