<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jouluaatto</title>
</head>
<body>
<h1>Päiviä jouluaattoon</h1>
    <p>
        <?php echo daysUntilChristmasEve(); ?> Päivää Jouluaattoon
    <?php
      function daysUntilChristmasEve() {
        $today = time();
        $christmas = strtotime('24 December');
        $daysLeft = floor(($christmas - $today) / 86400);
        return $daysLeft;
    }  
    ?>


</body>
</html>