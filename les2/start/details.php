<?php
require_once 'includes/music-data.php';
$index = $_GET['index'];

$album = $musicAlbums[$index];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Collection - Details [ALBUM]</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<div class="container px-4">
    <h1 class="title mt-4"><?= $album['album'] ?></h1>
    <section class="content">
            <ul>
                <li>Genre: <?= $album['genre'] ?></li>
                <li>Year: <?= $album['year'] ?></li>
                <li>Tracks: <?= $album['tracks'] ?></li>
            </ul>

        <a class="button" href="index.php">Go back to the list</a>
    </section>
</div>
</body>
</html>
