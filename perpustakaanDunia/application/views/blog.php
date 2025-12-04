<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($blog as $blogs) :?>
        <div class="blog">
            <h2><?php echo $blogs['judul_buku']; ?></h2>
        </div>
    <?php endforeach ?>
</body>
</html>