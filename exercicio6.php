<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 6</title>
</head>
<body>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['numero'];

        
        if ($num % 2 == 0) {
            $resultado = "Par";
        } else {
            $resultado = "Impar";
        }
    }
    ?>

    <h1>Verificar</h1>

    
    <form method="POST" action="">


        <label>Digite um número:</label>

        <input type="number" name="numero" required><br>

        <button type="submit">Verificar</button>

    </form>


    <?php if (isset($resultado)) { ?>
        <h2>Número: <?php echo $num; ?></h2>
        <h2>Resultado: <?php echo $resultado; ?></h2>
    <?php } ?>

</body>
</html>
