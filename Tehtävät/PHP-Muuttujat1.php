<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muuttujat</title>
</head>
<body>
    <form method="GET">
        <input type="number" name="number">
        <button>SUBMIT</button>
    </form>

<?php
    $numero = $_GET["number"];
    $random = (rand(1,10));
    echo $numero + $random;
?>


</body>
</html>