<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 5</title>
</head>
<body>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $min = $_POST['min'];
        $max = $_POST['max'];

       
        if (is_numeric($min) && is_numeric($max) && $min < $max) {
            $randomNumber = rand($min, $max); 
        } else {
            $error = "valor minimo deve ser menor";
        }
    }
    ?>

    <h1>Sorteio</h1>

    
    <?php if (isset($error)) { echo "<p style='color: red;'>$error</p>"; } ?>

    
    <form action="" method="POST">
        <label for="min">Mínimo:</label>
        <input type="number" name="min" required><br>

        <label for="max">Máximo:</label>
        <input type="number" name="max" required><br>

        <button type="submit">Sortear</button>
    </form>


    <?php if (isset($randomNumber)) { ?>
        <h2>Sorteado: <?php echo $randomNumber; ?></h2>
    <?php } ?>

</body>
</html>