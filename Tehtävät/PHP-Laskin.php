<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="num1" placeholder="Number 1"></input>
        <input type="text" name="num2" placeholder="Number 2"></input>
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
            <option>Modulo</option>
        </select>
        <br>
        <button name="submit" value="submit" type="submit">CALCULATE</button>
    </form>  
    <p>The answer is:</p>
    <?php
        if (isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case "None":
                    echo "Select A Method";
                break;
                case "Add":
                    echo $result1 + $result2;
                break;
                case "Subtract":
                    echo $result1 - $result2;
                break;
                case "Multiply":
                    echo $result1 * $result2;
                break;
                case "Divide":
                    echo $result1 / $result2;
                break;
                case "Modulo":
                    echo $result1 % $result2;
            }
        }
    ?>

</body>
</html>