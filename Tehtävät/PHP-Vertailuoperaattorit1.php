<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vertailuoperaattorit</title>
</head>
<body>
    <form method="GET">
        <label for="numero1">Kirjoita Luku</label>
        <input type="text" name="numero1"></input>
        <button>SUBMIT</button>
    </form>  
 
    <?php
$tulos = $_GET["numero1"];
$y = 5;
if ($tulos && $tulos < $y) {
    echo "Pienempi kuin 5";
};
if ($tulos > $y) {
    echo "Suurempi kuin 5";
};

    ?>
   <hr>
    <form method="GET">
        <label for="numero2">Kirjoita Luku</label>
        <input type="text" name="numero2"></input>
        <button>SUBMIT</button>
    </form>  
    <?php
$tulos = $_GET["numero2"];
$y = 5;
if ($tulos && $tulos < $y) {
    echo "Pienempi kuin 5";
} else if ($tulos > $y) {
    echo "Suurempi kuin 5";
} else if($tulos && $tulos = $y) {
    echo "Luku on Yhtäsuuri kuin 5";
};
    ?>
</body>
</html>