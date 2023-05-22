<?php

require_once "conn.php";

$table = filter_input(INPUT_POST, 'table');
$ano = filter_input(INPUT_POST, 'ano');
$valor = filter_input(INPUT_POST, 'valor');
$nomeDoCarro = filter_input(INPUT_POST, 'carro');
$query = "INSERT INTO $table (anomatheus, valormatheus, carromatheus) VALUES(:ANO, VALOR, CARRO)";




//preparar
$stmt = $conn->prepare($query);

//trocar
$stmt->bindValue (':ANO', $ano);
$stmt->bindValue(':VALOR', $valor);
$stmt->bindValue(':CARRO', $carro);


//executar

$stmt->execute(); 

header('Location: loginCarro.php');


?>