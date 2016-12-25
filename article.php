<?php

require __DIR__ . '/classes/News.php';
require __DIR__ . '/classes/View.php';

$news = new News(__DIR__ . '/data/itNews.php');
$view = new View();

//Ничего лишнего, тока тее id которые существуют
if (isset($_GET['id']) && $_GET['id'] !== '' && is_numeric($_GET['id']) && $_GET['id'] <= $news->countId($news)) {
    $id  = $_GET['id'] -1;
} else {
    header('location: /lesson7/news.php');
}
//

$view->set('articleOne', $news->getOneArticle($id));
$view->display(__DIR__ . '/template/article.php');