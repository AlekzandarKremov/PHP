<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toistorakenteet</title>
</head>
<body>
<h1>Numbers from 100 to 1</h1>
    <ul>
        <?php
        for ($i = 100; $i >= 1; $i--) {
            echo "<li>$i</li>";
        }
        ?>
    </ul>

</body>
</html>