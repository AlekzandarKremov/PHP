<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $taulukko = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    foreach ($taulukko as $alkio) {
        echo $alkio . " ";
    }
    
    $alkioidenLukumaara = count($taulukko);
    echo "</br>";  
    echo "Kaikki parilliset luvut taulukosta: ";
    
    for ($i = $alkioidenLukumaara - 1; $i >= 0; $i--) {
        if ($taulukko[$i] % 2 == 0) {
            echo $taulukko[$i] . " ";
        }
    }
    ?>


</body>
</html>