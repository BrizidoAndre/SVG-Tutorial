<?php $files = scandir('./');
$files = array_diff($files, ['index.php','..','.'])
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Exercícios de svg</h1>
<div class="links">
    <ul>
        <?php foreach($files as $file) : ?>
            <li>
                <a href="<?= $file ?>">
                    <?= $file ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</div>
</body>
</html>