<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 7</title>
</head>
<body>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST['numero'];
            $tabuada = ""; 

            for($i = 1; $i <= 10; $i++){
                $tabuada = $tabuada . $num . " x " . $i . " = " . ($num * $i) . "<br>";
            }
        }
    ?>

    <h2>Tabuada</h2>

    <form method="POST" action="">

        <label>Digite um número:</label>

        <input type="number" name="numero" required><br>

        <button type="submit">Gerar tabuada</button>

    </form>

    <?php if (isset($tabuada)) { ?>

        <h2>Número: <?php echo $num; ?></h2>
        <h2>Resultado:</h2>
        <p><?php echo $tabuada; ?></p>

    <?php } ?>

</body>
</html>