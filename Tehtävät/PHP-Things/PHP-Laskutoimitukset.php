<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laskutoimitukset</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="number">
        <button>SUBMIT</button>
    </form>    

<?php
    $toimitus = $_GET["number"];
    echo $toimitus%5;
    echo " Is the remainder from 5"
?>


</body>
</html>