<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?ver=2">
    <title><?= $title ?></title>
    <descrition <?= $desc ?> >
</head>
<body>
    <div id="wrapper">
        <header>
           <a href="/45/admin/add.php">add new page</a>
        </header>
        <main>
            <?php include "elems/info.php"; ?>
            <?= $content ?>
        </main>
        <footer>
            <?php include "../elems/footer.php"; ?>
        </footer>
    </div>
</body>
</html>