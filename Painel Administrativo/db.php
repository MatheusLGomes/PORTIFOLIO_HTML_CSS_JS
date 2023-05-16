<?php

// Configuraçaõ do banco de dados
$dbHost = 'localhost';
$dbusername = 'ml_usuario';
$dbpassword = 'ml_senha';
$dbname = 'ml_banco_de_dados';

// Criando a conexão com o banco de dados
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verificando erros na conexão
if ($conn->connect_error) {
    die('Falha na conexão com o banco de dados: ' . $conn->connect_error);
}


?>