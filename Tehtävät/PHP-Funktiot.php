<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funktiot</title>
</head>
<body>
<form method="GET">
        <input type="text" name="text">
        <button>SUBMIT</button>
    </form>    

<?php
$teksti = $_GET["text"];
echo strlen($teksti);
?>

</body>
</html>