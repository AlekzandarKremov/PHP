<?php
if (isset($_POST['alaraja']) && isset($_POST['ylaraja'])) {
    $alaraja = intval($_POST['alaraja']);
    $ylaraja = intval($_POST['ylaraja']);
    
    if ($alaraja <= $ylaraja) {
        $count = 0;
        for ($i = $alaraja; $i <= $ylaraja; $i++) {
            echo $i . " ";
            $count++;
            if ($count % 10 == 0) {
                echo "<br>";
            }
        }
    } 
} 
?>