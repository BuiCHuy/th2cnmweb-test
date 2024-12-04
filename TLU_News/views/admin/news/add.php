<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<form action="" method="post" enctype="multipart/form-data" class="m-3">
    Name:
    <input type="text" class="form-control" name="title" id="title" required>
    Content:
    <Textarea name="content" id="content" cols="50" rows="5" class="form-control"></Textarea>
    Image:
    <input type="file" name="image" id="image" class="form-control">
    Create at
    <input type="date" name="create_at" id="create_at" class="form-control">
    Category id
    <select name="category_id" id="category_id" class="form-control mb-3">
        <option value="">Select a category</option>
        <?php foreach ($categorylist as $category): ?>
            <option value="<?= $category['id'] ?>"><?= htmlspecialchars($category['name']) ?></option>
        <?php endforeach; ?>
    </select>
    <Button type="submit" class="btn btn-success">Add</Button>
    <a href="/TLU_News/index.php?controller=News&action=index" class="btn btn-secondary">Cancel</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

