<?php

date_default_timezone_set('CET');
$date = new DateTimeImmutable();

$name = '';
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Greetings | Programmeren 2</title>
</head>
<body>
<h1>Greetings</h1>
<hr/>

<form action="" method="post">
    <label for="name">
        Name:
        <input type="text" id="name" name="name">
    </label>
    <input type="submit" name="submit">
    <p><?=$name?></p>
    <p><?=$date->format('h:i:s A')?></p>
</form>
</body>
</html>
