<?php
session_start();


if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: exercicio13.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
</head>
<body>

<h2>Você está logado</h2>

<form action="logout.php" method="POST">
    <button type="submit">Sair (Logout)</button>
</form>

</body>
</html>