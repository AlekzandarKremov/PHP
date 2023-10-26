<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toistorakenteet</title>
</head>
<body>
<h1>Kuukaudet</h1>
<?php
$kuukaudet = array(
    "Tammikuu",
    "Helmikuu",
    "Maaliskuu",
    "Huhtikuu",
    "Toukokuu",
    "Kesäkuu",
    "Heinäkuu",
    "Elokuu",
    "Syyskuu",
    "Lokakuu",
    "Marraskuu",
    "Joulukuu"
);

foreach ($kuukaudet as $kuukausi) {
    echo $kuukausi . "<br>";
}
?>
</body>
</html>