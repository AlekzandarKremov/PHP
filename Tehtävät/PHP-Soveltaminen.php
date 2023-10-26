<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soveltaminen</title>
</head>
<body>
    <form method="GET">
        <label for="vuosi">Kirjoita Vuosi Numero</label>
        <input type="text" name="vuosi"></input>
        <button>SUBMIT</button>
    </form>  
 
    <?php
    $vastaus = $_GET["vuosi"];

    if ($vastaus % 400 == 0) {
        echo "Vuosi on karkausvuosi";
    } elseif ($vastaus % 100 == 0) {
        echo "Vuosi ei ole karkausvuosi";
    } elseif ($vastaus % 4 == 0) {
        echo "Vuosi on karkausvuosi";
    } else {
         echo "Vuosi ei ole karkausvuosi";
    }
    ?>

</body>
</html>