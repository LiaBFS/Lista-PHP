<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 11</title>
</head>
<body>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $l1 = $_POST['lado1'];
        $l2 = $_POST['lado2'];
        $l3 = $_POST['lado3'];

       
        if ($l1 + $l2 <= $l3 || $l2 + $l3 <= $l1 || $l1 + $l3 <= $l2) {
            echo "Não é um triângulo";
        } 
        else {
            echo "É um triângulo<br>";

           
            if ($l1 == $l2 && $l2 == $l3) {
                echo "Equilátero";
            } 
            else if ($l1 == $l2 || $l2 == $l3 || $l1 == $l3) {
                echo "Isósceles";
            } 
            else {
                echo "Escaleno";
            }
        }
    }
?>

<form method="POST" action="">
    <label>Lado 1:</label>
    <input name="lado1" type="number" step="0.01" required><br>

    <label>Lado 2:</label>
    <input name="lado2" type="number" step="0.01" required><br>

    <label>Lado 3:</label>
    <input name="lado3" type="number" step="0.01" required><br>

    <button type="submit">Gerar dados do triângulo</button>
</form>

</body>
</html>