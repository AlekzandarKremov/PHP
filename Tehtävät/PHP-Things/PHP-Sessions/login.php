<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    $kayttajatunnus = $_POST['username'];
    $salasana = $_POST['password'];
    
    if($kayttajatunnus === 'Mikko' && $salasana === 'Miekkakala') {
        header('Location: etusivu.php');
    } else {
        header('Location: login.html');
    }
} else {
    header('Location: login.html');
}
?>