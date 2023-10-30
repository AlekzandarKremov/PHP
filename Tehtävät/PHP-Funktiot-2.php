<!DOCTYPE html>
<html>
<head>
    <title>ALV-laskuri</title>
</head>
<body>
    <h1>ALV-laskuri</h1>
    <form action="PHP-Funktiot2.php" method="post">
        Syötä rahasumma euroina: <input type="text" name="summa">
        <input type="submit" value="Laske ALV">
    </form>
    <?php
function laskALV($summa) {
    $alv_prosentti = 24;
    $alv = $summa * ($alv_prosentti / 100);
    $yhteensä = $summa + $alv;
    
    echo "Rahasumma {$summa} euroa ALV {$alv_prosentti}%:n kanssa on {$yhteensä} euroa";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["summa"])) {
        $syotetty_summa = floatval($_POST["summa"]);
        laskALV($syotetty_summa);
    } else {
        echo "Syötä rahasumma lomakkeeseen.";
    }
}
?>
</body>
</html>