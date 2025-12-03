<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 10</title>

    <style>
        .numero {
            padding: 4px 6px;
            margin: 2px;
            display: inline-block;
            border-radius: 4px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $minimo = $_POST['min'];
        $maximo = $_POST['max'];

        for ($i = $minimo; $i <= $maximo; $i++){
            echo "<span class='numero'>$i</span>";
        }
    }
?>

<form method="POST" action="">

    <label for="min">Mínimo:</label>
    <input type="number" name="min" required><br>

    <label for="max">Máximo:</label>
    <input type="number" name="max" required><br>

    <button type="submit">Gerar intervalo</button>
</form>

</body>
</html>