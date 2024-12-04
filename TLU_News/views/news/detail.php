
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $news_detail["title"]?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container">

    <h1 class="display-4"><?= $news_detail["title"]?></h1>
    <p class="text-muted">Ngày đăng: <?= $news_detail["created_at"]?></p>

    <div class="card mb-3">
        <img src="<?= $news_detail["image"]?>" class="card-img-top" alt="<?= $news_detail["title"]?>">
        <div class="card-body">
            <p class="card-text"><?= $news_detail["content"]?></p>
        </div>
    </div>

    <a href="/TLU_News/index.php?controller=Home&action=showListNew" class="btn btn-primary">Quay về</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
