<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 2 Exercises</title>

    <link rel="stylesheet" href="style.css" />

</head>

<body>
    
<div class="container">
        <h2>Arithmetic Operators</h2>
        <form method="post">
            <input type="text" name="a" placeholder="Enter first value" required>
            <input type="text" name="b" placeholder="Enter second value" required>
            <select name="operator" required>
                <option value="" disabled selected>Select an operator</option>
                    <option value="add">Addition (+)</option>
                    <option value="subtract">Subtraction (-)</option>
                    <option value="multiply">Multiplication (*)</option>
                    <option value="divide">Division (/)</option>
                    <option value="modulus">Modulus (%)</option>
                    <option value="exponentiation">Exponentiation (**)</option>
            <button type="submit">Calculate</button>
            <p class="result">here</p>
        </form>
    </div>

</body>

<?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $a = $_POST['a'];
                    $b = $_POST['b'];
                    $c = isset($_POST['c']) ? $_POST['c'] : null;
                    $operator = $_POST['operator'];
                    $result = '';

                    switch ($operator) {
                        case 'add':
                            $result = $a + $b;
                            break;
                        case 'subtract':
                            $result = $a - $b;
                            break;
                        case 'multiply':
                            $result = $a * $b;
                            break;
                        case 'divide':
                            $result = $a / $b;
                            break;
                        default:
                            $result = 'Invalid operator selected';
                    }

                    echo '<p>Result: ' . htmlspecialchars($result) . '</p>';
                }
            ?>

</html>