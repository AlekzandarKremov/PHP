<?php
$kertotaulu = $_POST["numero"];
echo "<table border='1'>";



    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>" . ($kertotaulu * $j) . "</td>";
    }
    echo "</tr>";


echo "</table>";
?>