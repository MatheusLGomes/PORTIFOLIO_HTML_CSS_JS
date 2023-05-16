<?php
session_start();

// Verificar se o usuário está autenticado
if (!isset($_SESSION['username'])) {
    header('Location: index.php'); // Redirecionar para a página de login
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Painel Administrativo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Bem-vindo, <?php echo $_SESSION['username']; ?>!</h2>
        <a href="logout.php">Sair</a>
        <!-- Adicione aqui o conteúdo do painel administrativo -->
    </div>
</body>
</html>
