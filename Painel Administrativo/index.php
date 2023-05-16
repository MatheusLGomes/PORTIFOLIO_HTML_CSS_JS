<?php
session_start();

// Verificar se o usuário já está logado
if (isset($_SESSION['username'])) {
    header('Location: dashboard.php'); // Redireciona para o painel administrativo
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo - Login</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
  <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="login.php">
            <input type="text" name="username" placeholder="Nome de usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>