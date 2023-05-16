<?php
session_start();
session_destroy();
header('Location: index.php'); // Redirecionar para a página de login
exit();
?>
