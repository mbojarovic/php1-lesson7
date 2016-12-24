<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>PHP-1</title>

    <!-- Bootstrap core CSS -->
    <link href="/lesson7/template/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/lesson7/template/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/lesson7/template/styles/blog.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/lesson7/template/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="/lesson7/news.php">Новости</a>
        </nav>
    </div>
</div>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">Новости</h1>
        <p class="lead blog-description">Новости IT всего мира.</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">

            <?php

            foreach ($this->data['articles'][0]->getArticle() as $article): ?>

                <div class="blog-post">
                    <h2 class="blog-post-title"><a href="/lesson7/article.php?id=<?php echo $article['id'] ?>">
                            <?php echo $article['news_title']; ?></a></h2>
                    <p class="blog-post-meta"><?php echo $article['news_date']; ?> by
                        <a href="#"><?php echo $article['news_author']; ?></a></p>
                    <p><?php echo mb_substr($article['news_text'], 0 , 300); ?>...</p>
                </div><!-- /.blog-post -->

            <?php endforeach; ?>

        </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">

        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/lesson7/template/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/lesson7/template/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>