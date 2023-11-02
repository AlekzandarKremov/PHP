<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertailuoperaattorit</title>
</head>
<body>
    <form method="GET">
        <label for="numero1">Kirjoita Numero 1</label>
        <input type="text" name="numero1"></input>
        <label for="numero2">Kirjoita Numero 2</label>
        <input type="text" name="numero2"></input>
        <button>SUBMIT</button>
    </form>  
 
    <?php
$tulos = $_GET["numero1"];
$tulos2 = $_GET["numero2"];

if ($tulos % 2 == 0 && $tulos2 % 2 == 0) {
    echo "Molemmat numerot voidaan jakaa kahdella.";
} elseif ($tulos % 2 != 0 && $tulos2 % 2 != 0) {
    echo "Kumpaakaan lukua ei voi jakaa kahdella.";
} else {
    echo "Yksi numero on jaollinen kahdella ja yksi ei ole.";
}

    ?>

</body>
</html>