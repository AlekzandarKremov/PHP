<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toistorakenteet</title>
</head>
<body>
     <h1>Numbers 1-100</h1>
    <table>
        <tr>
            <th>Number</th>
        </tr>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            echo "<tr><td>$i</td></tr>";
        }
        ?>
    </table>   
 <?php
     
 ?>

</body>
</html>