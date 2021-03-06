<?php

    declare(strict_types = 1);
    include 'includes/class-autoload.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator Example</title>
</head>
<body>
    
    <form action="includes/calc.inc.php" method="post">
        <h3>My Own Calculator</h3>
        <input type="number" name="num1" placeholder="First Number">
        <select name="oper">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number">
        <button type="submit" name="submit">Calculate</button>
    </form>
    <br>

    <h3>Result: <?php 
        if (isset($_GET['result'])){
            echo $_GET['result'];
        }else {
            echo "Now you can calculate)))";
        }
    ?></h3>

</body>
</html>