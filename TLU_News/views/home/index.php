
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1 class="text-center">Tin tức TLU những ngày qua</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="news_block p-3">
                <?php
                $linkdetail = '/TLU_News/index.php?controller=News&action=showNews&index=';
                foreach ($list_categories as $categoryvalue) {
                    echo '<div class="card mb-3">';
                    echo '<div class="card-header bg-secondary text-white">';
                    echo $categoryvalue['name'];
                    echo '</div>';
                    echo '<div class="card-body">';
                    foreach ($list_news as $newsvalue) {
                        if ($newsvalue["category_id"] == $categoryvalue["id"]) {
                            echo '<a href="' . $linkdetail . $newsvalue['id'] . '" class="card-link text-decoration-none">';
                            echo $newsvalue["title"];
                            echo '</a>';
                        }
                    }
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>