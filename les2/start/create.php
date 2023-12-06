<?php

if(isset($_POST['submit'])) {
    if(empty($_POST['artist']) || empty($_POST['album']) || empty($_POST['genre']) || empty($_POST['year']) || empty($_POST['tracks'])) {
        echo "You missed some info!";
    } else {
        $artist = $_POST['artist'];
        $album = $_POST['album'];
        $genre = $_POST['genre'];
        $year =  $_POST['year'];
        $tracks = $_POST['tracks'];
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Collection - Create Album</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<div class="container px-4">
    <h1 class="title mt-4">Create New Album</h1>

    <?php if(!isset($artist, $album, $genre, $year, $tracks)) { ?>
        <form action="" method="post">

            <label for="artist">Artist</label>
            <input type="text" id="artist" name="artist">
            <br>
            <label for="album">Album</label>
            <input type="text" id="album" name="album">
            <br>
            <label for="genre">Genre</label>
            <input type="text" id="genre" name="genre">
            <br>
            <label for="year">Year</label>
            <input type="text" id="year" name="year">
            <br>
            <label for="tracks">Tracks</label>
            <input type="text" id="tracks" name="tracks">
            <br>

            <input class="button" type="submit" name="submit" value="Versturen">
        </form>

        <a class="button" href="index.php">Go back to the list</a>
    <?php } else { ?>
        <section class="content">
            <p>Form has been sent!</p>
            <a class="button" href="index.php">Go back to the list</a>
        </section>
    <?php } ?>

</div>
</body>
</html>
