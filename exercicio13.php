<?php
session_start();


if (isset($_SESSION['logado']) && $_SESSION['logado'] === true) {
    header("Location: principal.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

 
    $usuarioCorreto = "admin";
    $senhaCorreta = "1234";

    if ($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
        $_SESSION['logado'] = true;
        header("Location: principal.php");
        exit;
    } else {
        echo "<p style='color:red'>inváldio</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Questao 10 pt1</title>
</head>
<body>

<h2>Login</h2>

<form method="POST" action="">
    <label>Usuário:</label><br>
    <input type="text" name="usuario" required><br><br>

    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>

    <button type="submit">Entrar</button>
</form>

</body>
</html>