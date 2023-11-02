<?php
    $hinta = $_POST["hinta"];
    $vero = $_POST["vero"];
    $kokonais = $hinta + (($vero / 100) * $hinta);

    echo "hinta".$hinta. "<br>";
    echo "vero".$vero. "<br>";
    echo "kokonais".$kokonais. "<br>";

    
?>