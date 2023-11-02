<!DOCTYPE html>
<html>
<head>
    <title>Kappaleiden Hinta laskin</title>
</head>
<body>
    <h1>Valittujen kappaleiden yhteishinta</h1>
    <?php
    if(isset($_POST['lista']) && is_array($_POST['lista'])) {
        $totalPrice = 0;
        foreach($_POST['lista'] as $songPrice) {
            $totalPrice += (float)$songPrice;
        }
        echo "Yhteishinta: " . number_format($totalPrice, 2) . " €";
    } 
    ?>
</body>
</html>