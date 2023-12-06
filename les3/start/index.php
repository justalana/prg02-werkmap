<?php
/** @var mysqli $db */

require_once 'includes/connection.php';

$query = "SELECT * FROM albums";
$result = mysqli_query($db, $query)
or die('Error '.mysqli_error($db).' with query '.$query);

$albums = [];
while($row = mysqli_fetch_assoc($result))
{
    $albums[] = $row;
}

mysqli_close($db);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Collection</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<div class="container px-4">
    <h1 class="title mt-4">Music Collection</h1>
    <hr>
    <div class="columns is-centered">
        <div class="column is-narrow">

            <table class="table is-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Artist</th>
                    <th>Album</th>
                    <th>Genre</th>
                    <th>Year</th>
                    <th>Tracks</th>
                    <th></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td colspan="9" class="has-text-centered">&copy; My Collection</td>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach ($albums as $index => $album) { ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= $album['artist'] ?></td>
                        <td><?= $album['name'] ?></td>
                        <td><?= $album['genre'] ?></td>
                        <td><?= $album['year'] ?></td>
                        <td><?= $album['tracks'] ?></td>
                        <td><a href="details.php?id=<?= $album['id'] ?>">Details</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>