<?php

if (!isset($_GET['id']) || $_GET['id'] == '') {
    header(header: 'Location: index.php');
    exit;
}

$id = $_GET['id'];

/** @var mysqli $db */
require_once 'database.php';

$query = 'SELECT * FROM albums WHERE id ='.$id;
$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

if(mysqli_num_rows($result) != 1) {
    header(header: 'Location: index.php');
    exit;
}

$album = mysqli_fetch_assoc($result);

mysqli_close($db);

// vul de betreffende velden van het formulier met de data uit de database voor dit specifieke album


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Muziekalbums - Create</title>
</head>
<body>
<div class="container px-4">
    <h1 class="title mt-4">Update album</h1>

    <section class="columns">
        <form class="column is-6" action="" method="post">
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="artist">Artist</label>
                </div>
                <div class="field-body">
                    <input class="input" id="artist" type="text" name="artist" value="<?= $album['name']?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="name">Album</label>
                </div>
                <div class="field-body">
                    <input class="input" id="name" type="text" name="name" value="<?= $album['artist']?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="genre">Genre</label>
                </div>
                <div class="field-body">
                    <input class="input" id="genre" type="text" name="genre" value="<?= $album['genre']?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="year">Year</label>
                </div>
                <div class="field-body">
                    <input class="input" id="year" type="text" name="year" value="<?= $album['year']?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="tracks">Tracks</label>
                </div>
                <div class="field-body">
                    <input class="input" id="tracks" type="number" name="tracks" value="<?= $album['tracks']?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal"></div>
                <div class="field-body">
                    <button class="button is-link is-fullwidth" type="submit" name="submit">Save</button>
                </div>
            </div>
        </form>
    </section>
    <a class="button mt-4" href="opdr1-pagina1.html">&laquo; Terug naar pagina 1</a>
    <br>
    <a class="button mt-4" href="index.html">&laquo; Terug naar het overzicht van de lesopdrachten</a>
</div>
</body>
</html>
