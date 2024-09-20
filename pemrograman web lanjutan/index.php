<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Operasi Matematika</title>
    <!-- Link ke file CSS eksternal -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2><center>Web Operasi Matematika</center></h2>

    <form method="POST" action="">
        <div class="form-group">
            <label for="num1">First Number:</label>
            <input type="number" id="num1" name="num1" step="any" required>
        </div>
        <div class="form-group">
            <label for="num2">Second Number:</label>
            <input type="number" id="num2" name="num2" step="any" required>
        </div>
        <div class="form-group">
            <label for="operation">Operation:</label>
            <select id="operation" name="operation" required>
                <option value="add">Addition (+)</option>
                <option value="subtract">Subtraction (-)</option>
                <option value="multiply">Multiplication (×)</option>
                <option value="divide">Division (÷)</option>
            </select>
        </div>
        <button type="submit">Calculate</button>
    </form>

    <!-- Memindahkan hasil perhitungan di bawah form -->
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = floatval($_POST['num1']);
        $num2 = floatval($_POST['num2']);
        $operation = $_POST['operation'];
        $result = null;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = 'Error! Division by zero.';
                }
                break;
            default:
                $result = 'Invalid operation';
        }

        echo "<div class='result'><strong>Hasil: </strong>$result</div>";
    }
    ?>

</div>

</body>
</html>
