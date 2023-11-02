<?php
$sanat = file("words.txt");

$voitto = false;
$havio = false;

if (isset($_POST['arvaus'])) {
    $kayttajan_arvaus = strtolower($_POST['arvaus']);
    $arvattava_sana = strtolower($_POST['arvattava_sana']);

    if ($kayttajan_arvaus == $arvattava_sana) {
        $voitto = true;
    } else {
        $havio = true;
    }
}

if (!$voitto && !$havio) {
    $arvattava_sana = rtrim($sanat[array_rand($sanat)]);
    $sekoitettu_sana = str_shuffle($arvattava_sana);
}
?>