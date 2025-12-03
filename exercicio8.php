<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 8</title>
</head>
<body>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $texto = $_POST['palavra'];
        $textoMinusculo = strtolower($texto);

        
        $tamanho = strlen($texto);

        
        $semEspaco = str_replace(' ', '', $textoMinusculo);
        $palindromo = ($semEspaco == strrev($semEspaco));

       
        $vogais = 0;
        $consoantes = 0;

        foreach (str_split($textoMinusculo) as $char) {
            if (in_array($char, ['a','e','i','o','u'])) {
                $vogais++;
            } elseif (ctype_alpha($char)) { 
                
                $consoantes++;
            }
        }

        echo "<h2>Resultados:</h2>";
        echo "Tamanho da string: $tamanho <br>";
        echo "Palíndromo? " . ($palindromo ? "Sim" : "Não") . "<br>";
        echo "Vogais: $vogais <br>";
        echo "Consoantes: $consoantes <br><br>";
    }
?>

<form method="POST">

    <label>Digite qualquer coisa:</label><br>

    <input type="text" name="palavra" required><br>

    <button type="submit">Carregar</button>

</form>

</body>
</html>