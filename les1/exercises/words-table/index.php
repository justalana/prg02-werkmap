<?php
$numbers = [1,2,3,4];
$words = ['one','two','three','four']

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Words Table | Programmeren 2</title>
</head>
<body>
<section class="section">
    <div class="content">
        <h2 class="title is-2">
            Words Table
        </h2>

        <table>
            <?php for($i = 0; $i < count($numbers); $i++) { ?>
                <tr>
                    <td><?= $i +1 ?></td>
                    <td><?=$words[$i]?></td>
                </tr>
            <?php } ?>

        </table>
    </div>
</section>
</body>
</html>
