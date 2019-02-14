<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
          crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>

    <title>News</title>
</head>
<body>
<p></p>
<div class="container">
    <h1>News</h1>
    <?php foreach ($articles as $newsID => $article) {
        ?>
        <div class="row">
            <div class="col">
                <a href="<?php echo '/03_news/article.php?id=' . $newsID; ?>">
                    News <?php echo $newsID + 1; ?></a>
                <div class="row">
                    <div class="col">
                        <?php echo $article->getShortText(); ?>
                        <br>&nbsp;
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
</body>
</html>