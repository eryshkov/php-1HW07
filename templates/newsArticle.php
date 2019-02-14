<?php
include_once __DIR__ . '/../03_news/constants.php';
include_once __DIR__ . '/../03_news/classes/Article.php';

$serializedData = ob_get_contents();

$article = unserialize($serializedData, ['allowed_classes' => true]);

ob_clean();
?>

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

        <title>Article</title>
    </head>
    <body>
    <p></p>
    <div class="container">
        <h1><?php echo $article->getShortText(); ?></h1>
        <div class="row">
            <div class="col">
                <?php echo $article->getFullText(); ?>
            </div>
        </div>
    </div>
    </body>
    </html>

<?php $templateText = ob_get_contents();
ob_end_clean();
return $templateText;
?>