<?php
session_start();
require_once 'db.php';

// Verificar se o usuário já está logado
if (isset($_SESSION['username'])) {
    header('Location: dashboard.php'); // Redirecionar para o painel administrativo
    exit();
}

// Processar o formulário de login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar as credenciais de login no banco de dados
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Credenciais corretas, iniciar a sessão
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); // Redirecionar para o painel administrativo
        exit();
    } else {
        // Credenciais incorretas, exibir mensagem de erro
        $error = "Nome de usuário ou senha inválidos";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
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
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
