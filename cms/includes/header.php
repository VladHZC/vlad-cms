<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title><?=$site['title']?> | <?=$site['tagline']?></title>
    <link rel="icon" type="image/png" href="<?=$site['favicon']?>"/>
    <link href="theme/<?=$site['theme']?>/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="all">
    <header>
        <nav class="main-menu">
            <ul class="main-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="?page=faq">FAQ</a></li>
                <li><a href="?page=about">Staff</a></li>
                <li><a href="?page=contactus">Contato</a></li>
            </ul>
        </nav>

        <div class="site-title">
            <h1><?=$site['title']?></h1>
            <p><?=$site['tagline']?></p>
        </div>

    </header>

</body>
</html>
